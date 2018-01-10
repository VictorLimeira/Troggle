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

    <p>User name: <?php echo($_SESSION['logged']['UserName']); ?></p>
    <p>E-mail: <?php echo($_SESSION['logged']['Email']); ?></p>
    <p>Password: <?php echo($_SESSION['logged']['Password']); ?></p>

    <button >Logout</button>


<?php require 'partials/footer.php'; ?>