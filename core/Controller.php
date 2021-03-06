<?php defined('BASE_PATH') OR exit('No direct script access allowed');

class Controller {

    protected $config = [];
    protected $session;
    protected $uri;
    protected $view;
    protected $model;
    protected $helper;
    protected $csrf;

    public function __construct() 
    {
        // Load main config file
        if (file_exists('./config/config.php')) {
            require('./config/config.php');
            $this->config = $config;
        } else {
            exit('config.php is missing from /config');
        }

        // Auto loads requested helpers from config
        foreach ($config['autoload_helpers'] as $helper_file) {
            $this->helper($helper_file);
        }

        // Start core functions
        $this->csrf     = new CSRF();
        $this->session  = new Session();
        $this->uri      = new URI();

        // Sends status to token status check
        $this->csrf->token($this->config['csrf_status']);
    }

    /**
     * Loads requested helper file
     * @param string helper
     */
    protected function helper($helper = null)
    {
        if (file_exists(CORE_HELPERS_FOLDER.$helper.'.php')) {
            include(CORE_HELPERS_FOLDER.$helper.'.php');
        } elseif (file_exists(HELPERS_FOLDER.$helper.'.php')) {
            include(HELPERS_FOLDER.$helper.'.php');
        } else {
            echo 'Helper file not found: '.$helper.'.php';
        }
    }

    /**
     * Loads requested model
     * @param string model file
     */
    protected function model($model)
    {
        include(MODELS_FOLDER . $model . '.php');
        $this->$model = new $model();
    }

    /**
     * Loads requested view file
     * @param mixed string or array
     * @param array data
     */
    protected function view($view, $data = array())
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
                require(VIEWS_FOLDER . $file . '.php');
            }
        } else {
            require(VIEWS_FOLDER . $view . '.php');
        }
    }
}
