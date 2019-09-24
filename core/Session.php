<?php defined('BASE_PATH') OR exit('No direct script access allowed');

class Session {

    protected $config = [];
    protected $data;
    protected $key;

    public function __construct()
    {
        // Required files
        require('./config/config.php');

        // Load app config file
        $this->config = $config;
    }

    /**
     * Sets data into session
     * @param array $data
    */
    public function set($data) 
    {
        // Sets the session_id into the current entity
        $_SESSION['session_id'] = session_id();

        // Loads app_name supplied in config.php
        $_SESSION['app_name'] = $this->config['app_name'];

        // Sets session update time
        $_SESSION['session_updated'] = date("U");

        // Loop through supplied array
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * Removes data from session
     * @param string $key
    */
    public function unset($key) 
    {
        unset($_SESSION[$key]);
    }

    /**
     * Retrieve session value
     * @param string $key
     * @return string $value
    */
    public function get($key) 
    {
        $value = $_SESSION[$key];
        return $value;
    }

    /**
     * Retrieves the entire session
     * @return array
    */
    public function all() 
    {
        return $_SESSION;
    }

    /**
     * Destroys the session
    */
    public function destroy() 
    {
        unset($_SESSION);
        session_destroy();
    }

}