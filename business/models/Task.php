<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 03/02/18
 * Time: 06:42
 */

namespace App\business\models;
use App\core\App as App;


class Task
{
    public $description;
    public $started;
    public $finished;
    public $user;

    public function start(){
        return;
    }

    public function end(){
        return;
    }

    public function delete(){
        return;
    }

    public static function get_all($user){

        $tasks = App::get('database')->queryColumn("task", "Task", "user", $user);

        if (!$tasks){
            return [];
        }

        return $tasks;

    }
}