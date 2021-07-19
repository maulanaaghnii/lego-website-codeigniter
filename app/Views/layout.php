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

<!-- Style Start -->
<style>
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        font-size: 12px;
        padding: 10px 24px;
        border-radius: 8px;
        background-color: white;
        color: black;
        border: 2px solid #fd8024;
    }

    .button1:hover {
        background-color: #fd8024;
        color: white;
    }

    .button2 {
        font-size: 12px;
        padding: 10px 24px;
        border-radius: 8px;
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
    }

    .button2:hover {
        background-color: #008CBA;
        color: white;
    }

    .button3 {
        font-size: 12px;
        padding: 10px 24px;
        border-radius: 8px;
        background-color: white;
        color: black;
        border: 2px solid #f44336;
    }

    .button3:hover {
        background-color: #f44336;
        color: white;
    }

    #example1 {
        border: 10px solid white;

        /* padding: 10px; */
        /* border-radius: 25px; */
        text-align: center;
        padding-bottom: 40px;
        border-radius: 5px;
        background-color: #f2f5f7;
        /* padding: 20px; */
    }

    body,
    html {
        background-color: #f2f5f7;
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
    }


    /* SHOP BUTTON */
    .button-shop {
        display: inline-block;
        border-radius: 4px;
        background-color: #ffc107;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .button-shop span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        color: black;
    }

    .button-shop span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button-shop:hover span {
        padding-right: 25px;
    }

    .button-shop:hover span:after {
        opacity: 1;
        right: 0;
    }
</style>
<!-- Style End -->




<body>

    <?= $this->include('navbar'); ?>

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->







        <!-- <div class="container-fluid"> -->
        <?= $this->renderSection('content'); ?>
        <!-- Example row of columns -->




        <!-- </div> /container -->

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
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('jquery-3.6.0.min.js') ?>"></script>

    <?= $this->renderSection('script') ?>
</body>

</html>