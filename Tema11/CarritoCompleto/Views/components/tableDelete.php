<?php if(!empty($data['products'])){ ?>
<table class="table table-hover text-center w-75 m-auto">
    <tr class="bg-secondary text-light">
        <td><b>Name</b></td>
        <td><b>Description</b></td>
        <td><b>Price</b></td>
        <td><b>Image</b></td>
        <td><b>Stock</b></td>
        <td colspan="3"><b>Admin Actions</b></td>
    </tr>
    <?php foreach ($data['products'] as $product) { ?>
        <tr class="align-middle">
            <td><?= $product->getName() ?></td>
            <td><?= $product->getDescription() ?></td>
            <td><?= $product->getPrice()." €" ?></td>
            <td><img src="<?= $product->getImage() ?>" class="img-thumbnail" alt="image" style="width: 100px; height:100px"></td>
            <td><?= $product->getStock() ?></td>
            <td>
                <form action="#" method="post">
                    <input type="hidden" name="deleteProd" value="<?= $product->getId() ?>">
                    <button type="submit" class="btn btn-dark">Delete Product</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>
<?php }else{ ?>
    <h5 class="text-center my-3">No matches found</h5>
<?php } ?>