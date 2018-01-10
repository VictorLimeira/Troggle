<?php require 'partials/head.php'; ?>

    <h1>Troggle Login</h1>

    <form class="" action="/login" method="POST">

        <?php if (isset($message)){ echo $message;} ?><br>

        <label><b>Username</b></label>
        <input type="text" name="UserName" autofocus="autofocus" value="" placeholder="User name"></input>

        <br>

        <label><b>Password</b></label>
        <input type="password" name="Password" value="" placeholder="Password"></input>

        <br>

        <button type="submit">Enter Troggle</button>

    </form>

<?php require 'partials/footer.php'; ?>