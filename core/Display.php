<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 02/02/18
 * Time: 22:08
 */

namespace App\core;


class Display
{
    public static function show($view, $data=[])
    {
        $data = $data;
        require dirname(__FILE__)."/../business/views/" . $view . ".view.php";
    }
}