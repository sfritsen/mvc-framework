<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');
/**
 * =========================================================
 * Master Configuration
 * =========================================================
 *
 * Primary settings for the framework and your application.
 * DO NOT DELETE ANYTHING FROM THIS FILE!
*/

/**
 * =========================================================
 * Application Root
 * =========================================================
 *
 * This is the base or root of your application where PYT
 * is installed.
 * 
 * Must include trailing slash!
*/
// define('APP_ROOT', "http://192.168.1.210/pyt/");

/**
 * ---------------------------------------------------------------------
 * Root application directory
 * ---------------------------------------------------------------------
 * 
 * This is the folder location your application is stored in.
 * Example: '/var/www/html/myApplication;
 * 
 * No trailing slash!
 */
$config['root_dir'] = '/var/www/html/mvc-framework';

/**
 * ---------------------------------------------------------------------
 * Base application URL
 * ---------------------------------------------------------------------
 * 
 * Base application URL for your application.
 * Example: 'http://192.168.1.210/mvc-framework/';
 * 
 * Must include trailing slash!
 */
$config['base_url'] = 'http://192.168.1.210/mvc-framework/';

/**
 * ---------------------------------------------------------------------
 * Session cookie name
 * ---------------------------------------------------------------------
 * 
 * Main cookie name for your application.
 * Cannot include numbers!
 */
$config['app_name'] = 'diy_framework';

/**
 * ---------------------------------------------------------------------
 * Default controller
 * ---------------------------------------------------------------------
 * 
 * Will always use the index method of the given controller
 */
$config['default_controller'] = 'welcome';

/**
 * ---------------------------------------------------------------------
 * Database connection
 * ---------------------------------------------------------------------
 */
// $config['database'] = array(
//     'host' => 'localhost',
//     'user' => 'root',
//     'pass' => '616461',
//     'name' => 'framework',
//     'char' => 'utf8mb4'
// );