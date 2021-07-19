<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<br>


<table class="table">
    <thead class="text-center">
        <!-- <th>No</th> -->
        <th>Thumbnail</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach ($products as $index => $product) : ?>

            <tr class="align-middle">
                <!-- <td><?= ($index + 1) ?></td> -->
                <td class="text-center"><img class="img-fluid" width="300px" alt="thumbnail" src="<?= base_url('uploads/' . $product->thumbnail) ?>" style="border: 2px solid darkgrey;"></td>
                <td class="align-middle text-center">
                    <h4><?= $product->name ?></h4>
                </td>

                <td class="align-middle text-center">
                    <h4><?= $product->price ?></h4>
                </td>
                <td class="align-middle text-center">
                    <h4><?= $product->stock ?></h4>
                </td>
                <td class="align-middle text-center">
                    <a href="<?= site_url('product/view/' . $product->id) ?>" class="button button2">Details</a>
                    <a href="<?= site_url('product/update/' . $product->id) ?>" class="button button1">Edit</a>
                    <a href="<?= site_url('product/delete/' . $product->id) ?>" class="button button3">Delete</a>
                </td>

            </tr>

        <?php endforeach ?>
    </tbody>

</table>

<?= $this->endSection() ?>