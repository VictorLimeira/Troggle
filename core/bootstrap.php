<?php

use App\core\App as App;

App::bind('config', require dirname(__FILE__)."/../business/config.php");

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));