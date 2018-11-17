<?php

$uri = $_SERVER['REQUEST_URI'];


$routes = [
	'/' => 'home.php',
	'/robots' => 'robots.php',
	'/about' => 'about.php',
	'/contact' => 'contact.php' 
];



if (array_key_exists($uri, $routes)) {
	require $routes[$uri];
} else {
	echo 'Route ' . $uri .' does not exist';
}

