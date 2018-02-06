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
        Display::show("login");
    }

    public function validate_login(){
        $username = $_POST["UserName"];
        $password = $_POST["Password"];

        $message = ['message' => ""];

        $users = App::get('database')->queryAll('user', 'User');

        if ($users){
            foreach ($users as $user) {
                if ($user->username === $username){
                    if ($user->password === $password){
                        $email = $user->email;
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
                } else {
                    $message = ['message' => "User name or Password not correct."];
                }
            }
        }
        $message = ['message' => "User name or Password not correct."];

        Display::show("login", $message);
    }

    public function home(){

        session_start();
        if (!isset($_SESSION['logged'])){
            header('Location: /login');
        }

        $tasks = [
            'tasks' => []
        ];

        foreach (App::get('database')->queryAll('task', 'Task') as $task) {
            if ($task->user === $_SESSION['logged']['id']) {
                array_push($tasks['tasks'], $task);
            }
        }


        Display::show("home", $tasks);
    }

    public function logout(){
        session_start();
        unset($_SESSION["logged"]);
        header("Location: /login");
    }
}