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
    protected $csrf;

    public function __construct()
    {
        // Load main config file
        require('./config/config.php');
        $this->config = $config;

        // Load core functions
        $this->csrf     = new CSRF();
        $this->session  = new Session();
        $this->uri      = new URI();

        // Create CSRF token
        $this->csrf->token($this->config['csrf_status']);
    }

    public function model($model)
    {
        include(PYT_MODELS_FOLDER . $model . '.php');
        $this->$model = new $model();
    }

    public function view($view, $data = array())
    {
        // Function to map array
        function array_map_r( $func, $arr ) {
            $newArr = array();

            foreach( $arr as $key => $value ) {
                $newArr[ $key ] = ( is_array( $value ) ? array_map_r( $func, $value ) : ( is_array($func) ? call_user_func_array($func, $value) : $func( $value ) ) );
            }

            return $newArr;
        }

        // If $data exists, run function and strip tags
        if ($data) {
            $cleaned_data = array_map_r('strip_tags', $data);
            extract($cleaned_data);
        }

        // If $view is array, loop through and require files
        // Else, load the supplied view file
        if (is_array($view)) {
            foreach ($view as $file) {
                require(PYT_VIEWS_FOLDER . $file . '.php');
            }
        } else {
            require(PYT_VIEWS_FOLDER . $view . '.php');
        }
        
    }

}