<?php

// Start the session at the very beginning
session_start();

// Define the base directory of the application as a constant
define('BASE_DIR', __DIR__);

// Improved autoloader to handle a wider range of directories and namespace usage
spl_autoload_register(function ($class) {
    // List of all base directories where class files could reside
    $baseDirs = [
        BASE_DIR . '/Models/',
        BASE_DIR . '/Controllers/',
    ];

    // Replace the namespace separator with the directory separator in the class name
    // and append '.php' to the result to construct the filename
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    // Check each base directory for the existence of the class file
    foreach ($baseDirs as $baseDir) {
        $fullPath = $baseDir . $file;
        if (file_exists($fullPath)) {
            require_once $fullPath;
            return;
        }
    }

    // Optional: throw an exception or handle errors if the class cannot be loaded
});

// Load the Router class
// Ensure the path to Router.php is correct relative to the index.php file
require_once BASE_DIR . '/Controllers/Router.php';
$router = new Router();

// Route the request
$router->routeReq();
