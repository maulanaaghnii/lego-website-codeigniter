<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        /* Move down content because we have a fixed navbar that is 3.5rem tall */
        body {
            padding-top: 3.5rem;
        }
    </style>
</head>

<body>

    <?= $this->include('navbar'); ?>

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->







        <div class="container">
            <?= $this->renderSection('content'); ?>
            <!-- Example row of columns -->


            <hr>

        </div> <!-- /container -->

    </main>

    <footer class="container fixed-bottom">

        <p>&copy; Company 2017-2018</p>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('jquery-3.6.0.min.js') ?>"></script>
</body>

</html>