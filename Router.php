<?php

$uri = $_SERVER['REQUEST_URI'];


$routes = [
	'/' => 'controllers/HomeController.php',
	'/robots' => 'controllers/RobotsController.php',
	'/about' => 'controllers/AboutController.php',
	'/contact' => 'controllers/ContactController.php' 
];



if (array_key_exists($uri, $routes)) {
	require $routes[$uri];
} else {
	echo 'Route ' . $uri .' does not exist';
}

