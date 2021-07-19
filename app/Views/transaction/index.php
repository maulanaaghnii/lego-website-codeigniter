<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container">
    <br>
    <br>
    <h1>Transaction</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Customer</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($model as $index => $transaction) : ?>
                <tr>
                    <td><?= $transaction->id ?></td>
                    <td><?= $transaction->id_product ?></td>
                    <td><?= $transaction->id_customer ?></td>
                    <td><?= $transaction->address ?></td>
                    <td><?= $transaction->quantity ?></td>
                    <td><?= $transaction->total_price ?></td>
                    <td>
                        <a href="<?= site_url('transaction/view/' . $transaction->id) ?>" class="btn btn-primary">Detail</a>
                        <!-- <a href="<?= site_url('transaction/invoice/' . $transaction->id) ?>" class="btn btn-primary">Invoice</a> -->
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>

    </table>


</div>



<?= $this->endSection(); ?>