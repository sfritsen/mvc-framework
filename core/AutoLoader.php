<?php defined('BASE_PATH') OR exit('No direct script access allowed');

/**
 * ---------------------------------------------------------------------
 * Auto Loading
 * ---------------------------------------------------------------------
 *
 * Anonymous function loading using PHPs 
 * spl_autoload_regiater
 * 
 * @param string $class
*/
spl_autoload_register(function ($class) {

    // Checks to see if $class is in CORE then CONTROLLERS
    // If the file exists, load the class file
    if (file_exists('./core/' . $class . '.php')) {
        include './core/' . $class . '.php';
	} elseif (file_exists(CONTROLLERS_FOLDER . $class . '.php')) {
		include CONTROLLERS_FOLDER . $class . '.php';
	}

});