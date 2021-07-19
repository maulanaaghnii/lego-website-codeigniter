<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<!-- <h1>Hello MEK</h1>
<h4>
    <?php
    echo session()->get('username');
    ?>
</h4> -->


<!-- carousel start -->
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('/img/slide-carousel-1.jpg') ?>">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('/img/slide-carousel-3.jpg') ?>">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('/img/slide-carousel-4.jpg') ?>">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<!-- carousel end -->
<br>
<br>
<div class="container-fluid  ">
    <div class="row">
        <div class="col-sm-6 text-center ">
            <br>


            <br>

            <span>

                <h1>Write Your own stories with LEGO</h1>

                <h3>Get offer for DC sets.</h3>
                <br>
                <a href="<?= site_url('catalog/index'); ?>">

                    <button class="button-shop" style="vertical-align:middle"><span>Shop now </span></button>
                </a>
            </span>
        </div>
        <div class="col-sm-6 text-center">
            <img src="<?= base_url('/img/lego-store-index.jpg') ?>" width="500px">
        </div>
    </div>
</div>
<br>
<hr>
<div class="container-fluid text-center">

    <h2 style="padding-top: 50px;">Edition Sets</h2>
    <br>
    <img src="<?= base_url('/img/dc-logo-trans.png') ?>" width="100px">
    <img src="<?= base_url('/img/batman-logo.png') ?>" width="100px">
    <img src="<?= base_url('/img/indianajones.png') ?>" width="100px">
    <img src="<?= base_url('/img/harry-potter.png') ?>" width="100px">
    <img src="<?= base_url('/img/marvel-logo.png') ?>" width="100px">
    <img src="<?= base_url('/img/sw-logo.png') ?>" width="100px">
    <img src="<?= base_url('/img/jurassic-logo.png') ?>" width="100px">
    <img src="<?= base_url('/img/super-mario-logo.png') ?>" width="100px">


</div>
<br>
<br>
<br>
<hr>




<div class="text-center">
    <h1>BEST SELLER SETS</h1>
</div>
<br>
<br>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <img src="<?= base_url('/img/best-seller-1.jpg') ?>" height="300">
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img src="<?= base_url('/img/best-seller-2.jpg') ?>" height="300">

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img src="<?= base_url('/img/best-seller-3.jpg') ?>" height="300">

            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>

</div>



<?= $this->endSection(); ?>