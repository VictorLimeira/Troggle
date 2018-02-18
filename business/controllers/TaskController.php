<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 17/02/18
 * Time: 19:55
 */

use App\business\models\Task as Task;

class TaskController
{

    public function start_task(){

        session_start();
        $task = new Task($_POST["description"], date("Y-m-d H:i:s"), $_SESSION['logged']['id']);
        $task->start();
        header('Location: /home');
        return;
    }

    public function end_task(){

        $id = $_POST["TaskId"];
        Task::end($id);
        header('Location: /home');
        return;
    }

    public function delete_task(){
        return;
    }

}