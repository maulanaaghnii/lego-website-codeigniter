<html>

<head>
    <style>
        table {

            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="font-size: 60px; color:'#dddddd';"><i>Invoice</i></div>
    <p>
        <i>Lego .inc</i><br>
        Jakarta, Indonesia<br>
        08888888888
    </p>
    <hr>
    <hr>

    <p>
        Customer : <?= $customer->customer ?><br>
        Address : <?= $transaction->address ?><br>
        Transaction No : <?= $transaction->no ?>
        Date : <?= date('Y-m-d', strtotime($transaction->created_date)) ?>
    </p>
    <table cellpadding="6">
        <tr>
            <th><strong>Product</strong></th>
            <th><strong>Item Price</strong></th>
            <th><strong>Amount</strong></th>
            <th><strong>Shiping Costs</strong></th>
            <th><strong>Total</strong></th>

        </tr>

        <tr>
            <td><?= $product->name ?></td>
            <td><?= "Rp " . number_format($product->price, 2, ',', '.') ?></td>
            <td><?= $transaction->quantity ?></td>
            <td><?= "Rp " . number_format($product->shiping_costs, 2, ',', '.') ?></td>
            <td><?= "Rp " . number_format($product->total_price, 2, ',', '.') ?></td>
        </tr>
    </table>
</body>

</html>