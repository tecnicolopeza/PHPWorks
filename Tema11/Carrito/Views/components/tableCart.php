<table class="table table-hover text-center w-75 m-auto">
    <tr class="bg-secondary text-light">
        <td><b>Name</b></td>
        <td><b>Description</b></td>
        <td><b>Image</b></td>
        <td><b>Price</b></td>
        <td><b>Quantity</b></td>
        <td colspan="3"><b>Actions</b></td>
    </tr>
    <?php foreach ($_SESSION['cart'] as $product => $value) { ?>
        <tr class="align-middle">
            <td><?= $value[0] ?></td>
            <td><?= $value[1] ?></td>
            <td><img src="<?= $value[3] ?>" class="img-thumbnail" alt="image" style="width: 100px; height:100px"></td>
            <td><?= $value[2] . " €" ?></td>
            <td><?= $value[4] ?></td>
            <td>
                <form action="../Controllers/deleteProd.php" method="post">
                    <input type="hidden" name="deleteProdId" value="<?= $value[5] ?>">
                    <input name="deleteProd" id="deleteProd" class="btn btn-warning text-light" type="submit" value="Delete">
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
        <td><?= $_SESSION['totalPrice'] . " €"; ?></td>
        <td><?= $_SESSION['totalProdCart']; ?></td>
        <td colspan="1">
            <form action="../Controllers/deleteProd.php" method="post">
                <input type="submit" name="emptyCart" id="emptyCart" class="btn btn-danger" value="Empty cart">
            </form>
        </td>
    </tr>
</table>



