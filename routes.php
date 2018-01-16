<?php

$router->get('', 'SiteController/index');
$router->get('about', 'SiteController/about');
$router->get('contact', 'SiteController/contact');
$router->get('login', 'controllers/login.php');
$router->post('login', 'controllers/post_login.php');
$router->get('home', 'controllers/home.php');
$router->get('logout', 'controllers/logout.php');

