<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('tasks', 'Home::tasks', ['filter' => 'auth']);
$routes->get('profile', 'Home::profile');
$routes->get('about', 'Home::about');
$routes->get('hash', 'Home::hash');
$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::processLogin');
$routes->get('logout', 'Auth::logout');
$routes->get('tasks/new', 'Home::newTask', ['filter' => 'auth']);
$routes->post('tasks/create', 'Home::createTask', ['filter' => 'auth']);
$routes->get('tasks/edit/(:num)', 'Home::editTask/$1', ['filter' => 'auth']);
$routes->post('tasks/update/(:num)', 'Home::updateTask/$1', ['filter' => 'auth']);
$routes->post('tasks/delete/(:num)', 'Home::deleteTask/$1', ['filter' => 'auth']);