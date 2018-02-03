<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('business/routes.php')
    ->direct(Request::uri(), Request::method());
