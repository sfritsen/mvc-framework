<?php

class Load {

    // Declare static private 
    // static $test;
    // private static $_instance;

    public function __construct($page)
    {
        //Thou shalt not construct that which is unconstructable!
        // self::$test = $page;
    }

    // Singleton object
    // public static function file() 
    // {
    //     if (!self::$_instance) {
    //         self::$_instance = new Load();
    //     }

    //     return self::$_instance;
    // }

    public static function view($page, $data = null) 
    {

        $path = './app/views/'.$page.'.php';
        include_once( $path );

    }

}