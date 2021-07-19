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
$repeatPassword = [
    'name'  => 'repeatPassword',
    'id'    => 'repeatPassword',
    'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>
<br>
<!-- <br> -->
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
<?= form_open('Auth/registration'); ?>

<!-- 
<div class="form-group">
    <?= form_label("Username", "username"); ?>
    <?= form_input($username); ?>
</div>
<div class="form-group">
    <?= form_label("Password", "password"); ?>
    <?= form_password($password); ?>
</div>
<div class="form-group">
    <?= form_label("RepeatPassword", "repeatPassword"); ?>
    <?= form_password($repeatPassword); ?>
</div>
<div class="text-center">
    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-dark btn-lg']); ?>
</div> -->



<div class="login-bg">
    <div class="row">
        <div class="col">
            <br>
            <br>
            <img src="<?= base_url('/img/login-left.png') ?>" width="500px">
        </div>
        <div class="col">
            <div id="example1">
                <!-- <br> -->
                <img src="<?= base_url('/img/account.png') ?>" width="100%" style="padding-bottom: 10px;">
                <img src="<?= base_url('/img/login-head.png') ?>" width="50px" style="padding-top: 10px;">
                <hr>
                <h3>Register Your Lego Account</h3>

                <br>
                <div class="container">
                    <?= form_open('Auth/login') ?>
                    <div class="form-group">
                        <?= form_label("Username", "username") ?>
                        <?= form_input($username) ?>
                        <p style="color: grey;">* username should more than 5 character</p>
                    </div>
                    <!-- <br> -->
                    <div class="form-group">
                        <?= form_label("Password", "password") ?>
                        <?= form_password($password) ?>
                        <p style="color: gray;">* password should more than 5 character</p>
                    </div>
                    <!-- <br> -->
                    <div class="form-group">
                        <?= form_label("RepeatPassword", "repeatPassword"); ?>
                        <?= form_password($repeatPassword); ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <?= form_submit('submit', 'Register', ['class' => 'btn btn-dark btn-lg']); ?>
                    </div>
                    <?= form_close() ?>

                    <br>
                    <p>Back to <a href="<?= site_url('auth/login') ?>" style="color: blue;">Sign In</a> </p>
                </div>
            </div>

        </div>
        <div class="col">
            <br>
            <br>
            <br>
            <img src="<?= base_url('/img/login-right.png') ?>" width="400px">
        </div>
    </div>





</div>

<?= form_close(); ?>
<?= $this->endSection(); ?>