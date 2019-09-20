<?php
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
        require('./config/constants.php');
        require('./config/config.php');

        // Load app config file
        $this->config = $config;

        // Load core functions
        $this->load = new Load();
        $this->session = new Session();
        $this->uri = new URI();
    }

    public function model($model)
    {
        include(PYT_MODELS_FOLDER . $model . '.php');
        $this->$model = new $model();
    }

    public function view ($view, $data = array())
    {
        if (is_array($data)) {
            extract($data);
        }

        require(PYT_VIEWS_FOLDER . $view . '.php');
    }

}