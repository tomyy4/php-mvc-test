<?php



spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = 'controllers/';

    include $path.$className.'.php';
}

//-------------------------------------

$homeController = new HomeController();
$aboutController = new AboutController();
$contactController = new ContactController();
$robotsController = new RobotsController();

