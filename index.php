<?php 
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment.
 *
 * Current usage is:
 *
 *     development
 *     testing
 *     production
 *
 */
define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

if (defined('ENVIRONMENT')) {
	switch (ENVIRONMENT)
	{
		case 'development':
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
		break;
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}

// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

// Get the URL and break it apart
// $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

// Required files
require __DIR__.'/config/constants.php';
require __DIR__.'/config/config.php';
require __DIR__.'/app/web.php';

function __autoload($class_name) {

    if (file_exists('./core/'.$class_name.'.php')) {
        require_once './core/'.$class_name.'.php';
    } else if (file_exists('./app/controllers/'.$class_name.'.php')) {
        require_once './app/controllers/'.$class_name.'.php';
    }
    
}

// If at app root, load defaults
// if ($url == '/') {

//     // This is the home page.  Initiate the home controller set in config.php
//     $req_controller = $config['base_route'];
//     $req_function = $config['base_function'];

//     // Include the selected controller file
//     require_once __DIR__.'/app/controllers/'.$config['base_route'].'.php';

//     // Format the class name
//     $controller_name = ucfirst($req_controller).'Controller';

//     // Initiate new instance
//     $view_obj = new $controller_name();

//     print $view_obj->$req_function();

// }else{

//     // This is not home page
//     // Initiate the appropriate controller

//     //The first element should be a controller
//     $req_controller = $url[0]; 

//     // If a second part is added in the URI, 
//     // it should be a method
//     $req_function = isset($url[1])? $url[1] :'';

//     // The remain parts are considered as 
//     // arguments of the method
//     $req_params = array_slice($url, 2); 

//     // Check if controller exists. NB: 
//     // You have to do that for the model and the view too
//     $ctrlPath = __DIR__.'/app/controllers/'.$req_controller.'.php';

//     if (file_exists($ctrlPath)) {

//         // Require the requested controller file
//         require_once __DIR__.'/app/controllers/'.$req_controller.'.php';

//         // Creates the controller name by setting the first character of $req_controller as a captial
//         $controller_name = ucfirst($req_controller).'Controller';

//         // $controllerObj  = new $controller_name;
//         // $view_obj        = new $viewName( $controllerObj );
//         $view_obj = new $controller_name();

//         // If there is a method (function) - Second parameter
//         if ($req_function != '') {

//             // check to make sure it exists
//             if(method_exists($controller_name, $req_function)) {

//                 // then we call the method 
//                 print $view_obj->$req_function($req_params);

//             }else{

//                 // Error out if it isn't found
//                 print "whoops!  thats not found";

//             }

//         }else{
//             // Default to index if no method was set
//             $req_function = 'index';

//             echo $view_obj->$req_function($req_params);
//         }

//     }else{

//         header('HTTP/1.1 404 Not Found');
//         die('404 - The file - '.$ctrlPath.' - not found');
//         //require the 404 controller and initiate it
//         //Display its view
//     }
// }