<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 13:55
 */

session_start();
unset($_SESSION["logged"]);
header("Location: /login");