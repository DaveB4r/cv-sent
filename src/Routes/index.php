<?php

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\UserController;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/signup', UserController::class, 'signUp');
$router->get('/signin', UserController::class, 'signIn');
$router->get('/logout', UserController::class, 'logout');
$router->post('/insert-user', UserController::class, 'insert');
$router->post('/login', UserController::class, 'login');

$router->dispatch();