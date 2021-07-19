<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<div class="container">
    <br>
    <br>
    <div class="container">
        <!-- <h4>Transaction No. <?= $transaction->id ?></h4> -->

        <table class="table">

            <tr>
                <td>Product</td>
                <td><?= $transaction->name ?></td>
            </tr>
            <tr>
                <td>Customer</td>
                <td><?= $transaction->username ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?= $transaction->address ?></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><?= $transaction->quantity ?></td>
            </tr>
            <tr>
                <td>Total</td>
                <td><?= $transaction->total_price ?></td>
            </tr>

        </table>
    </div>


</div>





<?= $this->endSection(); ?>