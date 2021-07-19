<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>



<div class="container">
    <!-- <h1> Details Product </h1> -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-2"></div>

        <div class="col-8 text-center">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" alt="thumbnail" src="<?= base_url('uploads/' . $product->thumbnail) ?>">
                    <h1 class="text-danger"><?= $product->name ?> </h1>
                    <h4>Price : <?= $product->price ?> </h4>
                    <h4>Stock : <?= $product->stock ?></h4>
                </div>
            </div>
        </div>


        <div class="col-2">
            <!-- <h1 class="text-danger"><?= $product->name ?> </h1>
            <h4>Price : <?= $product->price ?> </h4>
            <h4>Stock : <?= $product->stock ?></h4> -->
        </div>
    </div>

</div>


<?= $this->endSection(); ?>