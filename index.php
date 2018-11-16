<?php


$uri = $_SERVER['REQUEST_URI'];


$routes = [
	'/home' => 'home.php',
	'/about' => 'about.php',
	'/contact' => 'contact.php' 
];


//Comprueba nuestra Uri, si existe en uestro array de rutas, cargamos el controlador, que devolvera una lista
$uri = explode('.',$_SERVER['REQUEST_URI']);
var_dump($uri[0]);
if (array_key_exists($uri[0], $routes)) {
	echo 'match:' . $uri[0] . ' view will be returned';
	require trim($uri[0], '/'). '.php';
} else {
	echo 'Route does not exist in our web';
}

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<header>
		<h1>Welcome!</h1>
	</header>
 	<nav>
		<a href="home.php">Home</a>
		<a href="robot-store.php">Robots</a>
		<a href="about.php">About</a>
		<a href="contact.php">Contact</a>
	</nav>
	<main>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</main>
</body>
</html> -->