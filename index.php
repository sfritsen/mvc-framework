<?php
/**
 * ---------------------------------------------------------------------
 * DIY Framework
 * ---------------------------------------------------------------------
 * @author	Stephen Fritsen
 * @license	https://opensource.org/licenses/MIT
 * @since	Version 0.0.1
 * 
 * All configuration options can be found in /config
 */

/*
 * ---------------------------------------------------------------------
 * Define base_path
 * ---------------------------------------------------------------------
 * 
 * This gets the applications base working directory path
 */
define('BASE_PATH', str_replace("\\", "/", __DIR__));

/*
 *---------------------------------------------------------------------
 * Application Enviroment
 *---------------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * environment that's set.
 *
 * Current selections are
 *
 *     development
 *     testing
 *     production
 *
 */
define('ENVIRONMENT', 'development');

/*
 *---------------------------------------------------------------------
 * Error Reporting
 *---------------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT) {
	case 'development':
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		error_reporting(0);
	break;

	default:
		exit('The application environment is not set correctly. Set the ENVIRONMENT in index.php');
}

/*
 * ---------------------------------------------------------------------
 * Start the session
 * ---------------------------------------------------------------------
 */
session_start();

/**
 * ---------------------------------------------------------------------
 * Start new route
 * ---------------------------------------------------------------------
 */
include('core'.DIRECTORY_SEPARATOR.'Router.php');
$route = new Route();

/*
 * ---------------------------------------------------------------------
 * Require manditory files
 * ---------------------------------------------------------------------
 */
require_once BASE_PATH.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'Config.php';
require_once BASE_PATH.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'AutoLoader.php';
require_once BASE_PATH.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'constants.php';
require_once BASE_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'routes.php';