<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');
/**
 * =========================================================
 * Master Controller
 * =========================================================
*/

class PYT_Core {

    protected $config = [];
    protected $load;
    protected $session;
    protected $uri;
    protected $model;
    protected $view;

    public function __construct()
    {
        // Required files
        require('./config/config.php');

        // Load app config file
        $this->config = $config;

        // Load core functions
        $this->load     = new Load();
        $this->session  = new Session();
        $this->uri      = new URI();
    }

    public function model($model)
    {
        include(PYT_MODELS_FOLDER . $model . '.php');
        $this->$model = new $model();
    }

    public function view ($view, $data = array())
    {
        function array_map_r( $func, $arr ) {
            $newArr = array();

            foreach( $arr as $key => $value ) {
                $newArr[ $key ] = ( is_array( $value ) ? array_map_r( $func, $value ) : ( is_array($func) ? call_user_func_array($func, $value) : $func( $value ) ) );
            }

            return $newArr;
        }

        if ($data) {
            $pyt_cleaned = array_map_r('strip_tags', $data);
            extract($pyt_cleaned);
        }

        // if (is_array($data)) {
        //     extract($data);
        // } else {
        //     $stripped_data = strip_tags($data);
        //     extract($stripped_data);
        // }

        require(PYT_VIEWS_FOLDER . $view . '.php');
    }

}