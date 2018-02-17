<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 12:45
 */

require 'partials/head.php';?>

    <p>Welcome, <?php echo($_SESSION['logged']['UserName']); ?>.</p>

    <a href="/logout">Logout</a>

    <h1>Atividades</h1>

    <h2>Atividade atual</h2>

    <p>Hora Atual: <?= $today = date("Y-m-d H:i:s"); ?></p>

    <?php foreach($data['tasks'] as $task) : ?>
        <?php if(! $task->finished) : ?>
            <ul><li>
            <?= $task->description ?> | <?= $task->started ?>
            </li></ul>
        <?php endif; ?>
    <?php endforeach; ?>

    <h2>Todas as atividades</h2>

    <ul>
        <?php foreach($data['tasks'] as $task) : ?>
            <li>
                <?= $task->description ?> | <?= $task->started ?> | <?= $task->finished ?>
            </li>
        <?php endforeach; ?>
    </ul>


<?php require 'partials/footer.php'; ?>