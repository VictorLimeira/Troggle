<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 28/10/17
 * Time: 14:02
 */

class Request
{

    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}
