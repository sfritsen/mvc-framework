<?php

class URI {

    // Declare static private 
    private static $_instance = null;
    
    // Singleton object
    public static function segment() 
    {
        if (!self::$_instance) {
            self::$_instance = new URI();
        }

        return self::$_instance;
    }

    public function get($section) 
    {

        $get_uri = isset($_SERVER['REQUEST_URI']) ? explode('/', ltrim($_SERVER['REQUEST_URI'],'/')) : '/';

        if($section === '1') {
            $seg = isset($get_uri[3])? $get_uri[3] : ''; // segment 1
        }elseif($section === '2') {
            $seg = isset($get_uri[4])? $get_uri[4] : ''; // segment 2
        }elseif($section === '3') {
            $seg = isset($get_uri[5])? $get_uri[5] : ''; // segment 3
        }

        return $seg;

    }

}
