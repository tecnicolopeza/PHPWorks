<?php if (!empty($data['products'])) { ?>

    <table class="table table-hover text-center w-75 m-auto">
        <tr class="bg-secondary text-light">
            <td><b>Name</b></td>
            <td><b>Description</b></td>
            <td><b>Image</b></td>
            <td><b>Price</b></td>
            <td><b>Quantity</b></td>
            <td colspan="3"><b>Actions</b></td>
        </tr>
        <?php foreach ($data['products'] as $product => $value) { ?>
            <tr class="align-middle">
                <td><?= $value[1] ?></td>
                <td><?= $value[2] ?></td>
                <td><img src="<?= $value[4] ?>" class="img-thumbnail" alt="image" style="width: 100px; height:100px"></td>
                <td><?= $value[3] . " €" ?></td>
                <td><?= $value[6] ?></td>
                <td>
                    <form action="../Controllers/deleteProd.php" method="post">
                        <input type="hidden" name="deleteProdId" value="<?= $value[0] ?>"> <!--prodId-->
                        <input name="deleteProd" id="deleteProd" class="btn btn-warning text-white" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2"></td>
            <td colspan="1"></td>
            <td class="bg-secondary text-light"><b>Total price</b></td>
            <td class="bg-secondary text-light"><b>Total quantity</b></td>
            <td class="bg-secondary text-light"><b>General actions</b></td>

        </tr>
        <tr class="align-middle">
            <td colspan="2"></td>
            <td colspan="1"></td>
            <td><?= $data['totalPrice']->total . " €" ?></td>
            <td><?= $data['totalQuantity']->total; ?></td>
            <td colspan="1">
                <form action="../Controllers/deleteProd.php" method="post">
                    <input type="hidden" name="empty"> <!--Para vaciar carrito-->
                    <input type="submit" name="emptyCart" id="emptyCart" class="btn btn-danger" value="Empty cart">
                </form>
            </td>
        </tr>
    </table>
<?php } else {
    echo "<div class='justify-content-center text-center' >";
    echo "<h5 class='mt-3 text-primary'>Cart is empty</h5>";
    echo "<a class='btn btn-dark text-center mt-3' href='../Controllers/index.php' role='button'>Back to shop</a>";
    echo "</div>";
} ?>
