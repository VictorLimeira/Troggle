<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 13:25
 */

session_start();
if (isset($_SESSION['logged'])){
    require 'views/home.view.php';
} else {
    header('Location: /login');
}
