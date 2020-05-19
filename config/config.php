<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * ---------------------------------------------------------------------
 * Master Configuration
 * ---------------------------------------------------------------------
 *
 * Primary settings for the framework and your application.
 * DO NOT DELETE ANYTHING FROM THIS FILE!
 * 
 * ---------------------------------------------------------------------
 * Root application directory
 * ---------------------------------------------------------------------
 * 
 * This is the folder location your application is stored in.
 * Example: '/var/www/html/myApplication;
 * 
 * No trailing slash!
 */
$config['root_dir'] = '';

/**
 * ---------------------------------------------------------------------
 * Base application URL
 * ---------------------------------------------------------------------
 * 
 * Base application URL for your application.
 * Example: 'http://192.168.1.10/my_application/';
 * 
 * Must include trailing slash!
 */
$config['base_url'] = 'https://shadea.ca/mvc-framework/';

/**
 * ---------------------------------------------------------------------
 * Session cookie name
 * ---------------------------------------------------------------------
 * 
 * Main cookie name for your application.
 * Cannot include numbers or spaces!
 */
$config['app_name'] = 'diy_framework';

/**
 * ---------------------------------------------------------------------
 * Default controller
 * ---------------------------------------------------------------------
 * 
 * Will always use the index method of the given controller
 */
// $config['default_controller'] = 'welcome';

/**
 * ---------------------------------------------------------------------
 * Session type
 * ---------------------------------------------------------------------
 * 
 * Choose which type of session you want.
 * - cookie
 * - database
 */
$config['session_type'] = 'database';

/**
 * ---------------------------------------------------------------------
 * CSRF Protection
 * ---------------------------------------------------------------------
 * 
 * Controls whether CSRF protection is enabled or not.
 * 
 * On   = true
 * Off  = false
 */
$config['csrf_status'] = true;

/**
 * ---------------------------------------------------------------------
 * Autoload Helpers
 * ---------------------------------------------------------------------
 * 
 * Comma separated, loaded from /core/helpers and /app/helpers 
 * Example: array('url', 'time', 'form');
 */
$config['autoload_helpers'] = array('url', 'form');