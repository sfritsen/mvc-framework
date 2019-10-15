<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Welcome_Model {

    private $message = 'Welcome to Home page.';

    function __construct()
    {

    }

    public function welcomeMessage()
    {
        return $this->message;
    }

}