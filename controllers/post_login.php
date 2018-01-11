<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 12:43
 */

$username = $_POST["UserName"];
$password = $_POST["Password"];

$message = "";

$users = App::get('database')->queryAll('user', 'User');

foreach ($users as $user) {
    if ($user->username === $username){
        if ($user->password === $password){
            $email = $user->email;
            session_start();
            $_SESSION["logged"]=[
                'UserName' => $user->username,
                'Email' => $user->email,
                'Password' => $user->password
            ];
            header('Location: /home');
            return;
        }
    } else {
        $message = "User name or Password not correct.";
    }
}

if (!$users){
    $message = "User name or Password not correct.";
}

require 'views/login.view.php';