<?php
/**
 * Created by PhpStorm.
 * User: mannuel
 * Date: 16/01/18
 * Time: 07:30
 */

use App\core\App as App;
use App\core\Display as Display;

class UserController
{
    public function login(){

        session_start();
        if (!isset($_SESSION['logged'])){
            Display::show("login");
            return;
        }

        header('Location: /home');
    }

    public function validate_login(){
        $username = $_POST["UserName"];
        $password = $_POST["Password"];

        $user = App::get('database')->queryColumn("user", "User", "username", $username);

        if (!$user
            || ($user[0]->username != $username)
            || ($user[0]->password != $password)) {
            $message = ['message' => "User name or Password not correct."];
            Display::show("login", $message);
            return;
        }

        $user = $user[0];

        session_start();
        $_SESSION["logged"]=[
            'id' => $user->id,
            'UserName' => $user->username,
            'Email' => $user->email,
            'Password' => $user->password
        ];
        header('Location: /home');
        return;

    }

    public function home(){

        session_start();
        if (!isset($_SESSION['logged'])){
            header('Location: /login');
        }

        $tasks = [
            'tasks' => App::get('database')->queryColumn("task", "Task", "user", $_SESSION['logged']['id'])
        ];

        Display::show("home", $tasks);
    }

    public function logout(){
        session_start();
        unset($_SESSION["logged"]);
        header("Location: /login");
    }
}