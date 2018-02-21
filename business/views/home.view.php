<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 12:45
 */

require 'partials/head.php';?>
<main role="main" class="container">

    <h1>Troggle Tasks</h1>

    <?php if (!$data['unfinished']) : ?>
        <p>Start new task:</p>
        <form class="" action="/start_task" method="POST">
            <input type="text" name="description" autofocus="autofocus" placeholder="Task description"></input>

            <button class="btn btn-info" type="submit">Start task</button>
        </form>
    <?php endif; ?>

    <?php if ($data['unfinished']) : ?>
        <h3>Current task:</h3>
        <ul><li>
            <?= $data['unfinished']->description ?> | <?= $data['unfinished']->started ?>
            <form action = "/end_task" method = "POST">
                <input type="number" name="TaskId" value="<?= $data['unfinished']->id ?>" hidden="hidden"></input>
                <button class="btn btn-info" type="submit">Finish</button>
            </form>
        </li></ul>
    <?php endif; ?>

    <h2>Todas as atividades</h2>

        <?php foreach($data['tasks'] as $task) : ?>
            <p>
                <form action = "/delete_task" method = "POST">
                    <input type="number" name="TaskId" value="<?= $task->id ?>" hidden="hidden"></input>
                    <button class="btn btn-danger" type="submit">Delete</button>
                    <?= $task->description ?> -
                    <?php
                        $interval = date_diff(new DateTime($task->started), new DateTime($task->finished));
                        echo($interval->format('%H:%I:%S'));
                    ?>
                </form>
            </p>
        <?php endforeach; ?>
</main>

<?php require 'partials/footer.php'; ?>

