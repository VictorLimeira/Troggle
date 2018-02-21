<?php require 'partials/head.php'; ?>
    <h1>About</h1>

    <h2>Lindo</h2>
    <h2>Perfeito</h2>

    <?php
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$url'>back</a>";
    ?>
<?php require 'partials/footer.php'; ?>
