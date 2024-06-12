<?php

/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('index', ['controller' => 'HomeController', 'action' => 'index_home']);


$router->add('categories', ['controller' => 'CategoryController', 'action' => 'index']);
$router->add('categories-create', ['controller' => 'CategoryController', 'action' => 'create']);
$router->add('categories-store', ['controller' => 'CategoryController', 'action' => 'store']);
$router->add('categories-edit', ['controller' => 'CategoryController', 'action' => 'edit']);
$router->add('categories-update', ['controller' => 'CategoryController', 'action' => 'update']);
$router->add('categories-delete', ['controller' => 'CategoryController', 'action' => 'destroy']);

$router->add('users', ['controller' => 'UserController', 'action' => 'index']);
$router->add('users-create', ['controller' => 'UserController', 'action' => 'create']);
$router->add('users-store', ['controller' => 'UserController', 'action' => 'store']);
$router->add('users-edit', ['controller' => 'UserController', 'action' => 'edit']);
$router->add('users-update', ['controller' => 'UserController', 'action' => 'update']);
$router->add('users-delete', ['controller' => 'UserController', 'action' => 'destroy']);

$router->add('properties', ['controller' => 'PropertiesController', 'action' => 'index']);
$router->add('properties-create', ['controller' => 'PropertiesController', 'action' => 'create']);
$router->add('properties-store', ['controller' => 'PropertiesController', 'action' => 'store']);
$router->add('properties-edit', ['controller' => 'PropertiesController', 'action' => 'edit']);
$router->add('properties-update', ['controller' => 'PropertiesController', 'action' => 'update']);
$router->add('properties-delete', ['controller' => 'PropertiesController', 'action' => 'destroy']);

$router->add('bookings', ['controller' => 'BookingController', 'action' => 'index']);
$router->add('bookings-create', ['controller' => 'BookingController', 'action' => 'create']);
$router->add('bookings-store', ['controller' => 'BookingController', 'action' => 'store']);
$router->add('bookings-edit', ['controller' => 'BookingController', 'action' => 'edit']);
$router->add('bookings-update', ['controller' => 'BookingController', 'action' => 'update']);
$router->add('bookings-delete', ['controller' => 'BookingController', 'action' => 'destroy']);


$router->dispatch($_SERVER['QUERY_STRING']);


?>