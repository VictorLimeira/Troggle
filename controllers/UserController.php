<?php
/**
 * Created by PhpStorm.
 * User: mannuel
 * Date: 16/01/18
 * Time: 07:30
 */

class UserController
{
    public function login(){
        require 'views/login.view.php';
    }

    public function validate_login(){
        $username = $_POST["UserName"];
        $password = $_POST["Password"];

        $message = "";

        $users = App::get('database')->queryAll('user', 'User');

        if ($users){
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
        } else {
            $message = "User name or Password not correct.";
        }

        require 'views/login.view.php';
    }
}