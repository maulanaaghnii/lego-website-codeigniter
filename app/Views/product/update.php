<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<?php

$name = [
    'name' => 'name',
    'id' => 'name',
    'value' => $product->name,
    'class' => 'form-control',

];

$price = [

    'name' => 'price',
    'id' => 'price',
    'value' => $product->price,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];

$stock = [
    'name' => 'stock',
    'id' => 'stock',
    'value' => $product->stock,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];

$thumbnail = [
    'name' => 'thumbnail',
    'id' => 'thumbnail',
    'value' => null,
    'class' => 'form-control',
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-success',
    'type' => 'submit',
];



?>
<h1>Add Product</h1>
<?= form_open_multipart('Product/update/' . $product->id)  ?>

<div class="form-group">
    <?= form_label("Name", "name") ?>
    <?= form_input($name) ?>
</div>

<div class="form-group">
    <?= form_label("Price", "price") ?>
    <?= form_input($price) ?>
</div>

<div class="form-group">
    <?= form_label("Stock", "stock") ?>
    <?= form_input($stock) ?>
</div>
<img class="img-fluid" alt="thumbnail" src="<?= base_url('uploads/' . $product->thumbnail) ?>">
<div class="form-group">
    <?= form_label("Thumbnail", "thumbnail") ?>
    <?= form_upload($thumbnail) ?>
</div>

<div class="text-right">
    <?= form_submit($submit) ?>

</div>

<?= form_close() ?>

<?= $this->endSection(); ?>