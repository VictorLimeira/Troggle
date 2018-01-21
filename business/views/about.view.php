<?php require 'partials/head.php'; ?>
    <h1>About</h1>

    <?php
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$url'>back</a>";
    ?>
<?php require 'partials/footer.php'; ?>
