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
        return;
    }

    public function end_task(){

        $id = $_POST["TaskId"];
        Task::end($id);
        header('Location: /home');
        return;
    }

}