<?php

class App
{

    protected static $registry_box = [];

    public static function bind($key, $value)
    {
        static::$registry_box[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry_box))
        {
            throw new Exception('Could not find the key into registry_box.');
        }
        else
        {
            return static::$registry_box[$key];
        }
    }
}