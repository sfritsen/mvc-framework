<?php

class Route {

    public static $valid_routes = array();

    public static function get($route, $location) {

        $cleaned_route = ltrim($route, "/");

        self::$valid_routes[$cleaned_route] = $location;

        // echo "<pre>";
        // print_r (self::$valid_routes);
        // echo "</pre>";
        // $get_url = $_GET['url'];

        // echo $_GET['url'].' - '.$cleaned_route;

        if ($_GET['url'] === $cleaned_route) {

            $split_location = explode("@", $location, 2);
            $controller = $split_location[0];
            $function = $split_location[1];

            include_once('./app/controllers/'.$controller.'.php');

            $load = new $controller();
            $load->$function();

        }

    }

}