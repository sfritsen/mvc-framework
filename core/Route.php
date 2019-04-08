<?php

class Route {

    public static $validRoutes = array();

    // public static function get($route, $function) {

        // self::$validRoutes[] = $route;

    //     if ($_GET['url'] == $route) {
    //         $function->__invoke();
    //     }

    // }

    public static function get2($route, $location) {

        self::$validRoutes[] = $route;

        if ($_GET['url'] == $route) {
            $split_location = explode("@", $location, 2);
            $controller = $split_location[0];
            $function = $split_location[1];

            include_once('./app/controllers/'.$controller.'.php');

            $load = new $controller();
            $load->$function();
        }
        
    }

}