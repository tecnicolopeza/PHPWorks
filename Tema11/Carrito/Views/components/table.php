<table class="table table-hover text-center w-75 m-auto">
    <tr class="bg-secondary text-light">
        <td><b>Name</b></td>
        <td><b>Description</b></td>
        <td><b>Price</b></td>
        <td><b>Image</b></td>
        <td><b>Stock</b></td>
        <td colspan="3"><b>Actions</b></td>
    </tr>
    <?php foreach ($data['products'] as $product) { ?>
        <tr class="align-middle">
            <td><?= $product->getName() ?></td>
            <td><?= $product->getDescription() ?></td>
            <td><?= $product->getPrice()." €" ?></td>
            <td><img src="<?= $product->getImage() ?>" class="img-thumbnail" alt="image" style="width: 100px; height:100px"></td>
            <td><?= $product->getStock() ?></td>
            <td>
                <form action="../Controllers/addToCart.php" method="post">
                    <input type="hidden" name="prodAddToCart" value="<?= $product->getId() ?>">
                    <button type="submit" class="btn btn-dark">Add to Cart</button>
                </form>
            </td>
        </tr>
    <?php } ?>
</table>