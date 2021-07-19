<?php $session = session(); ?>
<!-- Style Start -->
<style>
    a {
        color: white;
        text-decoration: none;
    }

    a:hover {
        color: white;
        text-decoration: none;
        cursor: pointer;
    }

    .button5 {
        display: inline-block;
        border-radius: 4px;
        background-color: #f7ae39;
        border: none;
        color: black;
        text-align: center;
        font-size: 15px;
        padding: 7px;
        width: 80px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 1px;
    }

    .button5 span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button5 span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button5:hover span {
        padding-right: 15px;
        color: black;
    }

    .button5:hover span:after {
        opacity: 1;
        right: 0;
    }



    /* a {
        color: white;
        text-decoration: none;
    }

    a:hover {
        color: white;
        text-decoration: none;
        cursor: pointer;
    } */

    .button6 {
        display: inline-block;
        border-radius: 4px;
        background-color: #ffc107;
        border: none;
        color: black;
        text-align: center;
        font-size: 15px;
        padding: 7px;
        width: 110px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 1px;
    }

    .button6 span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button6 span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button6:hover span {
        padding-right: 15px;
        color: black;
    }

    .button6:hover span:after {
        opacity: 1;
        right: 0;
    }
</style>
<!-- Style End -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #D72500;">
    <a class="navbar-brand" href="#"><img src="<?= base_url('/img/legologo22.png') ?>" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php if ($session->get('isLoggedIn')) : ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('home/index'); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if (session()->get('role') == 0) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria aria-expanded="false">Product</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">

                            <a class="dropdown-item" href="<?= site_url('product/index') ?>">List Product</a>
                            <a class="dropdown-item" href="<?= site_url('product/create') ?>">Add Product</a>
                            <a class="dropdown-item" href="<?= site_url('transaction/index') ?>">Transaction</a>

                        </div>
                    </li>

                <?php else : ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('catalog/index'); ?>">Catalog </a>
                    </li>
                <?php endif ?>
            </ul>
        <?php endif ?>





    </div>
    <div class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            <?php if ($session->get('isLoggedIn')) : ?>
                <li class="nav-item active">
                    <a class="btn btn-danger" href="<?= site_url('auth/logout'); ?>">Sign Out</a>
                </li>

            <?php else : ?>
                <li class="nav-item active">
                    <!-- <a class="button5" style="vertical-align:middle" href="<?= site_url('auth/login') ?>"><span>Sign In</span></a> -->

                </li>

                <li class="nav-item active">
                    <p> &nbsp;</p>
                </li>


                <li class="nav-item active">
                    <!-- <a class="button6" style="vertical-align:middle" href="<?= site_url('auth/registration'); ?>"><span>Registration</span></a> -->

                </li>
            <?php endif ?>
        </ul>

    </div>
</nav>
<!-- <hr> -->