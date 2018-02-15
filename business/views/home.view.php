<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 09/01/18
 * Time: 12:45
 */

require 'partials/head.php';?>

    <h1>Contact</h1>

    <p>You're logged in as:</p>

    <p>User id: <?php echo($_SESSION['logged']['id']); ?></p>
    <p>User name: <?php echo($_SESSION['logged']['UserName']); ?></p>
    <p>E-mail: <?php echo($_SESSION['logged']['Email']); ?></p>
    <p>Password: <?php echo($_SESSION['logged']['Password']); ?></p>

    <a href="/logout">Logout</a>

    <h1>Atividades</h1>

    <h2>Atividade atual</h2>

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