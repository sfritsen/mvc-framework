<?php

class Load {

    // Declare static private 
    private static $_instance;

    protected function __construct()
    {
        //Thou shalt not construct that which is unconstructable!
    }

    // Singleton object
    public static function file() 
    {
        if (!self::$_instance) {
            self::$_instance = new Load();
        }

        return self::$_instance;
    }

    public static function view($page, $data) 
    {

        $path = './app/views/'.$page.'.php';
        require_once ( $path );

    }

}