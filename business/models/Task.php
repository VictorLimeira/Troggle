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

    public function __construct($description="", $started="", $user="") {
        $this->description = $description;
        $this->started = $started;
        $this->user = intval($user);
    }

    public function start(){
        App::get('database')->insertInto("task",
            ["description", "started", "user"],
            [$this->description, $this->started, $this->user]);

        return;
    }

    public static function end($id){
        App::get('database')->updateColumn("task", $id, "finished", date("Y-m-d H:i:s"));
        return;
    }

    public static function delete($id){
        App::get('database')->deleteRow("task", $id);
        return;
    }

    public static function get_all($user){

        $tasks = App::get('database')->queryColumn("task", "Task", "user", $user);

        if (!$tasks){
            return [];
        }

        return array_reverse($tasks);

    }

    public static function unfinished($user){
        $tasks = App::get('database')->queryColumn("task", "Task", "user", $user);

        foreach ($tasks as $task){
            if (!$task->finished){
                return $task;
            }
        }

        return false;
    }
}