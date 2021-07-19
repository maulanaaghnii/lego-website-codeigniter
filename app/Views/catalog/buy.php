<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<?php
$id_product = [
    'name' => 'id_product',
    'id' => 'id_product',
    'value' => $model->id,
    'type' => 'hidden',
];

$id_customer = [
    'name' => 'id_customer',
    'id' => 'id_customer',
    'value' => session()->get('id'),
    'type' => 'hidden'
];

$quantity = [
    'name' => 'quantity',
    'id' => 'quantity',
    'value' => 1,
    'min' => 1,
    'class' => 'form-control',
    'type' => 'number',
    'max' => $model->stock,
];

$total_price = [
    'name' => 'total_price',
    'id' => 'total_price',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];

$shiping_costs = [
    'name' => 'shiping_costs',
    'id' => 'shiping_costs',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];

$address = [

    'name' => 'address',
    'id' => 'address',
    'class' => 'form-control',
    'value' => null,

];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'type' => 'submit',
    'value' => 'Buy',
    'class' => 'btn btn-warning',
];

?>



<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" src="<?= base_url('uploads/' . $model->thumbnail) ?>" />
                    <h1 class="text-dark"> <?= $model->name ?> </h1>
                    <h4> Price : <?= $model->price ?></h4>
                    <h5> Stock : <?= $model->stock ?></h5>
                </div>
            </div>
        </div>
        <div class="col-6">

            <h4>Shiping</h4>

            <div class="form-group">
                <label for="provinsi">Province</label>
                <select class="form-control" id="provinsi">
                    <option>Select Province</option>
                    <?php foreach ($provinsi as $p) : ?>

                        <option value="<?= $p->province_id ?>"> <?= $p->province ?> </option>

                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city">
                    <option>Select City</option>
                </select>
            </div>

            <div class="form-group">
                <label for="service">Shiping Service</label>
                <select class="form-control" id="service">
                    <option>Select Shiping Service</option>
                </select>
            </div>

            <strong>Estimate : <span id="estimate"></span></strong>

            <hr>
            <?= form_open('Catalog/buy') ?>
            <?= form_input($id_product) ?>
            <?= form_input($id_customer) ?>

            <div class="form-group">
                <?= form_label('Amount', 'quantity') ?>
                <?= form_input($quantity) ?>
            </div>

            <div class="form-group">
                <?= form_label('Shiping Costs', 'shiping_costs') ?>
                <?= form_input($shiping_costs) ?>
            </div>

            <div class="form-group">
                <?= form_label('Total', 'total_price') ?>
                <?= form_input($total_price) ?>
            </div>

            <div class="form-group">
                <?= form_label('Address', 'address') ?>
                <?= form_input($address) ?>
            </div>

            <div class="text-right">
                <?= form_submit($submit) ?>
            </div>


            <?= form_close() ?>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
<?= $this->section('script') ?>

<script>
    $('document').ready(function() {
        var amount = 1;
        var price = <?= $model->price ?>;
        var shiping_costs = 0;
        $("#provinsi").on('change', function() {
            $("#city").empty();
            var id_province = $(this).val();
            $.ajax({
                url: "<?= site_url('catalog/getcity') ?>",
                type: 'GET',
                data: {
                    'id_province': id_province,
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"];
                    for (var i = 0; i < results.length; i++) {
                        $("#city").append($('<option>', {
                            value: results[i]["city_id"],
                            text: results[i]['city_name']
                        }))
                    }

                },

            });
        });
        $('#city').on('change', function() {

            var id_city = $(this).val();

            $.ajax({
                url: "<?= site_url('catalog/getcost') ?>",
                type: 'GET',
                data: {
                    'origin': 399,
                    'destination': id_city,
                    'weight': 1000,
                    'courier': 'jne',
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var results = data["rajaongkir"]["results"][0]["costs"];
                    for (var i = 0; i < results.length; i++) {
                        var text = results[i]["description"] + "(" + results[i]["service"] + ")";
                        $("#service").append($('<option>', {
                            value: results[i]["cost"][0]["value"],
                            text: text,
                            etd: results[i]["cost"][0]["etd"]
                        }));
                    }
                },
            });
        });

        $('#service').on('change', function() {

            var estimate = $('option:selected', this).attr('etd');
            shiping_costs = parseInt($(this).val());
            $("#shiping_costs").val(shiping_costs);
            $("#estimate").html(estimate + " Day");
            var total_price = (amount * price) + shiping_costs;
            $("#total_price").val(total_price);
        });
    });
</script>

<?= $this->endSection() ?>