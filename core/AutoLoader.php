<?php
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
	} else if (file_exists('./app/controllers/' . $class . '.php')) {
        include './app/controllers/' . $class . '.php';
	}

});

// spl_autoload_register(function ($trait) {

// 	// Checks to see if $class is in CORE then CONTROLLERS
// 	// If the file exists, load the class file
// 	if (file_exists('./core/' . $trait . '.php')) {
// 		include './core/' . $trait . '.php';
// 	}

// });