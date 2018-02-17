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
    public $id;
    public $description;
    public $started;
    public $finished;
    public $user;

    public function start(){

        $response = App::get('database')->insertInto("task",
            ["description", "started", "user"],
            [$this->description, $this->started, $this->user]);

        if (!$response){
            echo "Task not inserted";
        }

        echo "Task inserted successfully";
        return;
    }

    public static function end($id){
        App::get('database')->updateColumn("task", $id, "finished", date("Y-m-d H:i:s"));
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