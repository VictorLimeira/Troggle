<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('login', 'controllers/login.php');
$router->post('login', 'controllers/post_login.php');
$router->get('home', 'controllers/home.php');
$router->get('logout', 'controllers/logout.php');

