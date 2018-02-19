<?php require 'partials/head.php'; ?>

<main role="main" class="container">
    <h1 class="mt-5 mb-4">TTroggle</h1>
    <p class="lead">TTroggle is a learning purpose web system that mimics features from a service called Toggl.</p>

    <blockquote class="blockquote text-center my-5">
        <p class="mb-0">I am mesmerized about their product and decided to build a similar one during my process of learning.</p>
        <footer class="blockquote-footer">Mannuel Victor</footer>
    </blockquote>

    <div class="row">
        <div class="col-sm-6">
            <div class="card text-center my-4">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <p class="card-text">Login to start using TTroggle.</p><br>
                    <a href="/login" class="btn btn-success">Login</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center  my-4">
                <div class="card-body">
                    <h5 class="card-title">Toggl</h5>
                    <p class="card-text">Insanely simple time tracking, Toggl kills timesheets.</p>
                    <a href="https://toggl.com/" target="_blank" class="btn btn-danger">Toggl</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'partials/footer.php'; ?>
