<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

/**
 * =========================================================
 * Auto Loading
 * =========================================================
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
	} elseif (file_exists(PYT_CONTROLLERS_FOLDER . $class . '.php')) {
		include PYT_CONTROLLERS_FOLDER . $class . '.php';
	} elseif (file_exists(PYT_MODELS_FOLDER . $class . '.php')) {
		include PYT_MODELS_FOLDER . $class . '.php';
	}

});