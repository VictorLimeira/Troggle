<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 12:45
 */

require 'partials/head.php';?>

    <p>Welcome, <?php echo($_SESSION['logged']['UserName']); ?>.</p>
    <p><?= $today = date("Y-m-d H:i:s"); ?></p>

    <a href="/logout">Logout</a>

    <h1>Troggle Tasks</h1>

    <?php if (!$data['unfinished']) : ?>
        <p>Start new task:</p>
        <form class="" action="/start_task" method="POST">
            <input type="text" name="description" autofocus="autofocus" placeholder="Task description"></input>

            <button type="submit">Start Task</button>

        </form>
    <?php endif; ?>

    <?php if ($data['unfinished']) : ?>
        <h3>Current task:</h3>
        <ul><li>
            <?= $data['unfinished']->description ?> | <?= $data['unfinished']->started ?>
            <form action = "/end_task" method = "POST">
                <input type="number" name="TaskId" value="<?= $data['unfinished']->id ?>" hidden="hidden"></input>
                <input type="submit" name="finish task" value="finish task" />
            </form>
        </li></ul>
    <?php endif; ?>

    <h2>Todas as atividades</h2>

        <?php foreach($data['tasks'] as $task) : ?>
            <p>
                <form action = "/delete_task" method = "POST">
                    <input type="number" name="TaskId" value="<?= $task->id ?>" hidden="hidden"></input>
                    <input type="submit" name="delete task" value="delete task" />
                    <?= $task->description ?> | <?= $task->started ?> | <?= $task->finished ?>
                </form>
            </p>
        <?php endforeach; ?>


<?php require 'partials/footer.php'; ?>

