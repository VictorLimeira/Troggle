<?php require 'partials/head.php'; ?>

<div class="container mt-5">
    <form class="form-signin" action="/login" method="POST">

        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">TTroggle login</h1>
        </div>

        <?php if ($data) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $data["message"] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="form-label-group">
            <input type="text" name="UserName" id="inputText" class="form-control" placeholder="User name" required autofocus>
            <label for="inputText">Username</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>

        <button class="btn btn-lg btn-success btn-block" type="submit">Enter</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
    </form>
</div>

<?php require 'partials/footer.php'; ?>