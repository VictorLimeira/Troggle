<?php

$router->get('', 'SiteController/index');
$router->get('about', 'SiteController/about');
$router->get('contact', 'SiteController/contact');
$router->get('login', 'UserController/login');
$router->post('login', 'UserController/validate_login');
$router->get('home', 'controllers/home.php');
$router->get('logout', 'controllers/logout.php');

