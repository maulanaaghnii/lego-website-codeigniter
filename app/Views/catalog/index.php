<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<br>
<br>
<div class="container">
    <div class="row">
        <?php foreach ($model as $m) : ?>
            <div class="col-4 mb-3">
                <div class="card text-center">
                    <div class="card-header">
                        <span class="text-dark">
                            <strong><?= $m->name; ?></strong>
                        </span>
                    </div>
                    <div class="class-body">
                        <img class="mt-3" style="max-height: 168px;" src="<?= base_url('uploads/' . $m->thumbnail) ?>" />
                        <h5 class="mt-3 text-dark"> <?= "Rp. " . number_format($m->price, 2, ',', '.') ?> </h5>

                        <p class="text-success">Stock : <?= $m->stock ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?= site_url('catalog/buy/' . $m->id) ?>" style="width: 100%" class="btn btn-warning"> Buy </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


<?= $this->endSection() ?>