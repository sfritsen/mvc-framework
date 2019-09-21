<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');
/**
 * =========================================================
 * Route Fetcher 5000!
 * =========================================================
*/

class Route {

    public static function get($route, $location) {

        // Clean up the supplied route to allow optional backslash
        $cleaned_route = ltrim($route, "/");

        // DEGUGGING Stores route in array
        // self::$valid_routes[$cleaned_route] = $location;

        if ($_GET['url'] === $cleaned_route) {

            $split_location = explode("@", $location, 2);
            $controller = $split_location[0];
            $function = $split_location[1];

            include_once(PYT_CONTROLLERS_FOLDER.$controller.'.php');

            $load = new $controller();
            $load->$function();

        }

    }

}