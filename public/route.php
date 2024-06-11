<?php

/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('home', ['controller' => 'HomeController', 'action' => 'index_home']);


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


$router->dispatch($_SERVER['QUERY_STRING']);


?>