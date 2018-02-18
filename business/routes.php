<?php

$router->get('', 'SiteController/index');
$router->get('about', 'SiteController/about');
$router->get('contact', 'SiteController/contact');

$router->get('login', 'UserController/login');
$router->post('login', 'UserController/validate_login');
$router->get('home', 'UserController/home');
$router->get('logout', 'UserController/logout');

$router->post('end_task', 'TaskController/end_task');
$router->post('start_task', 'TaskController/start_task');
$router->post('delete_task', 'TaskController/delete_task');

