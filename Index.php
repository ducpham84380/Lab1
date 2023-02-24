<?php
require_once('Route.php');
$r = $_GET['r'] ?? '/';
if (isset($route[$r])) {
    $controllerName = $routes[$r]['controller'];
    $action = $routes[$r]['action'];
    require_once('Controller/' . $controllerName . ' .php');
    $controller = new $controllerName();
    $controller->$action();
} else {
    require_once('View/404.php');
}