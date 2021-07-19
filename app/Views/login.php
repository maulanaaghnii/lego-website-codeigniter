<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<?php
$username = [
    'name'  => 'username',
    'id'    => 'username',
    'value' => null,
    'class' => 'form-control'
];

$password = [
    'name'  => 'password',
    'id'    => 'password',
    'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');


?>

<!-- <h1>Login Form</h1> -->

<?php if ($errors != null) : ?>
    <div class="alert alert-danger" role="alert">

        <h4 class="alert-heading">
            There is mistake
        </h4>
        <hr>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>

<?php endif ?>





<br>

<br>
<div class="login-bg">
    <div class="row">
        <div class="col">
            <br>
            <br>
            <img src="<?= base_url('/img/login-left.png') ?>" width="480px">
        </div>
        <div class="col">
            <div id="example1">
                <!-- <br> -->
                <img src="<?= base_url('/img/account.png') ?>" width="100%" style="padding-bottom: 10px;">
                <img src="<?= base_url('/img/login-head.png') ?>" width="50px" style="padding-top: 10px;">
                <hr>
                <h3>Sign In to Your Account</h3>

                <br>
                <div class="container">
                    <?= form_open('Auth/login') ?>
                    <div class="form-group">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                    </div>
                    <br>
                    <div class="form-group">
                        <?= form_label("Password", "password") ?>
                        <?= form_password($password) ?>
                    </div>

                    <div class="text-center">

                        <br>
                        <?= form_submit('submit', 'Sign In', ['class' => 'btn btn-warning btn-lg ']); ?>
                        <a class="button6" style="vertical-align:middle" href="<?= site_url('auth/registration'); ?>"><span>Registration</span></a>
                        <!-- <a class="button5" type="button" style="vertical-align:middle" href="<?= site_url('auth/login') ?>"><span>Sign In</span></a> -->

                    </div>
                    <?= form_close() ?>
                </div>
                <br>
                <br>
                <br>
                <p>Don't have account ? <a href="<?= site_url('auth/registration'); ?>" style="color: blue;">Register Here!</a></p>
            </div>

        </div>
        <div class="col">
            <br>
            <br>
            <br>
            <img src="<?= base_url('/img/login-right.png') ?>" width="380px">
        </div>
    </div>





</div>


<?= $this->endSection(); ?>