<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * ---------------------------------------------------------------------
 * Master Core Controller
 * ---------------------------------------------------------------------
 */
class Core {

    // protected $config = [];
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

        // Load requested helpes from config
        foreach ($config['autoload_helpers'] as $helper_file) {
            $this->helper($helper_file);
        }

        // Load core functions
        $this->csrf     = new CSRF();
        $this->session  = new Session();
        $this->uri      = new URI();

        // Create CSRF token
        $this->csrf->token($this->config['csrf_status']);
    }

    /**
     * Loads requested helper file
     * @param string helper
     */
    public function helper($helper = null)
    {
        if (file_exists(CORE_HELPERS_FOLDER.$helper.'.php')) {
            include(CORE_HELPERS_FOLDER.$helper.'.php');
        } elseif (file_exists(HELPERS_FOLDER.$helper.'.php')) {
            include(HELPERS_FOLDER.$helper.'.php');
        } else {
            echo 'Helper file not found: '.$helper.'.php';
        }
    }

    public function model($model)
    {
        include(MODELS_FOLDER . $model . '.php');
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
                require(VIEWS_FOLDER . $file . '.php');
            }
        } else {
            require(VIEWS_FOLDER . $view . '.php');
        }
        
    }

}