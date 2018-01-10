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
      return $this->routes[$methodType][$uri];
    } else {
      throw new Exception("Error Processing Request for uri.", 1);

    }
  }
}
