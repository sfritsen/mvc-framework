<?php

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