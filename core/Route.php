<?php
/**
 * =========================================================
 * Router
 * =========================================================
*/
// new Route;

class Route {

    // Creates a valid_routes array
    public static $valid_routes = array();

    public static function get($route, $location) {

        // Clean up the supplied route to allow optional backslash
        $cleaned_route = ltrim($route, "/");

        // Stores route in array
        self::$valid_routes[$cleaned_route] = $location;

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