<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/*
 * ---------------------------------------------------------------------
 * Route Fetcher 5000!
 * ---------------------------------------------------------------------
*/

class Route {

    private $route;
    private $location;
    private $cleaned_route;
    private $split_location = [];
    private $controller;
    private $function;
    private $load;

    public function get($route, $location) {
        // Clean up the supplied route to allow optional backslash
        $cleaned_route = ltrim($route, "/");

        // DEGUGGING Stores route in array
        // self::$valid_routes[$cleaned_route] = $location;

        if ($_GET['url'] === $cleaned_route) {

            $split_location = explode("@", $location, 2);
            $controller = ucfirst($split_location[0]);
            $function = strtolower($split_location[1]);

            include_once(CONTROLLERS_FOLDER.$controller.'.php');

            $load = new $controller();
            $load->$function();

        }
    }

    public function post($route, $location) 
    {
        // Get config
        require('./config/config.php');

        // See if CSRF is enabled
        if ($config['csrf_status'] === true) {

            // Check if $_POST has a token
            if (isset($_POST['csrf_token'])) {

                // Token found, now compare to session
                if ($_SESSION['csrf_token'] === $_POST['csrf_token']) {
                    // They match!
                    $this->get($route, $location);
                } else {
                    // No match, exit and display message
                    exit('SESSION and CSRF tokens do not match');
                }

            } else {
                // Log the error
            }

        } elseif ($config['csrf_status'] === false) {
            // If CSRF is false, just go to normal get route
            $this->get($route, $location);
        }
    }
}