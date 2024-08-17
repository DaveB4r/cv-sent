<?php

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\JobController;
use App\Controllers\UserController;

$router = new Router();
# Home
$router->get('/', HomeController::class, 'index');

# User
$router->get('/signup', UserController::class, 'signUp');
$router->get('/signin', UserController::class, 'signIn');
$router->get('/logout', UserController::class, 'logout');
$router->get('/profile', UserController::class, 'profile');
$router->post('/insert-user', UserController::class, 'insert');
$router->post('/login', UserController::class, 'login');
$router->post('/change-pass', UserController::class, 'changePassword');

# Job
$router->get('/job', JobController::class, 'index');

$router->dispatch();