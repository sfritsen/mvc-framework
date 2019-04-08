<?php

class Route {

    // public static $validRoutes = array();

    // public static function get($route, $function) {

    //     self::$validRoutes[] = $route;

    //     if ($_GET['url'] == $route) {
    //         $function->__invoke();
    //     }

    // }

    protected function __construct()
    {
        //Thou shalt not construct that which is unconstructable!
    }

    public static function get2($route, $location) {

        $split_location = explode("@", $location, 2);
        $controller = $split_location[0];
        $function = $split_location[1];

        include_once('./app/controllers/'.$controller.'.php');

        if (class_exists($controller)) {
            
        }
        $load = new $controller();
        $load->$function();

    }

}