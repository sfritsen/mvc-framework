<?php

spl_autoload_register(function ($class) {
    // Works for no namespaces
    // include __DIR__.'/'.$class . '.php';

    // Should work with namespaces
    // include __DIR__ . '/' . str_replace("\\","/",$class) . '.php';

    if (file_exists('./core/' . $class . '.php')) {
        // require_once './core/'.$class_name.'.php';
        include './core/' . $class . '.php';
	} else if (file_exists('./app/controllers/' . $class . '.php')) {
        // require_once './app/controllers/'.$class_name.'.php';
        include './app/controllers/' . $class . '.php';
	}

});