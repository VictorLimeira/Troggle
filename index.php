<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

session_start();

Router::load('business/routes.php')
    ->direct(Request::uri(), Request::method());
