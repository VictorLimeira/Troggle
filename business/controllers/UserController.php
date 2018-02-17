<?php
/**
 * Created by PhpStorm.
 * User: mannuel
 * Date: 16/01/18
 * Time: 07:30
 */

use App\core\Display as Display;
use App\business\models\User as User;
use App\business\models\Task as Task;

class UserController
{
    public function login(){

        session_start();
        if (!isset($_SESSION['logged'])){
            Display::show("login");
            return;
        }

        header('Location: /home');
        return;
    }

    public function validate_login(){
        $username = $_POST["UserName"];
        $password = $_POST["Password"];

        $user = User::validate_login($username, $password);

        if (!$user) {
            $message = ['message' => "User name or Password not correct."];
            Display::show("login", $message);
            return;
        }

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
            'tasks' => Task::get_all($_SESSION['logged']['id'])
        ];

        Display::show("home", $tasks);
        return;
    }

    public function logout(){
        session_start();
        unset($_SESSION["logged"]);
        header("Location: /login");
        return;
    }
}