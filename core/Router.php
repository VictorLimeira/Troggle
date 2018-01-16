<?php

/**
 * router class to manage ... routing?!
 */

class Router
{

  public $routes = [
      'GET' => [],
      'POST' => []
  ];

  public static function load($file)
  {
      $router = new static;
      require $file;
      return $router;
  }

    function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

  function direct($uri, $methodType)
  {
    if (array_key_exists($uri, $this->routes[$methodType])) {
        $controllerArray = explode("/" , $this->routes[$methodType][$uri]);
        $controller = $controllerArray[0];
        $controllerMethod = $controllerArray[1];
        $classController = new $controller();
        $classController->$controllerMethod();
    } else {
      throw new Exception("Error Processing Request for uri.", 1);

    }
  }
}
