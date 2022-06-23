<?php 
    session_start();
    if (!isset($_SESSION['prodCart'])) {
        header('Location: index.php');  
    } 
    @include_once('addCart.php');
    @include_once('removeCart.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <title>Carrito</title>
</head>
<body>
    <header>
        <div class="titulos cesta">
            <h1><a href="cart.php">Cesta</a></h1>
        </div>
    </header>
    <main>
    <?php if (!empty($_SESSION['prodCart'])) {?>
        <table>
            <thead>
                <th class="cabecera-tabla">Productos</th>
                <th class="cabecera-tabla">Precio</th>
                <th class="cabecera-tabla">Cantidad</th>
                <th class="cabecera-tabla">Imagen</th>
                <th class="cabecera-tabla">Acciones</th>
            </thead>
            <?php  
                foreach ($_SESSION['prodCart'] as $producto => $value) {
            ?>
            <tr>
                <td><?= $producto; ?></td>
                <td><?= $_SESSION['productos'][$producto][0]; ?>€</td>
                <td><?= $_SESSION['prodCart'][$producto]; ?></td>
                <td><img src="<?= $_SESSION['productos'][$producto][2] ?>" alt="<?= $producto ?>"></td>
                <td>                    
                    <form action="removeCart.php" method="post">
                        <input type="hidden" name="rmvOne" value="<?=$producto?>">
                        <input type="submit" value="Quitar uno">
                    </form>
                    <form action="removeCart.php" method="post">
                        <input type="hidden" name="rmvAll" value="<?=$producto?>">
                        <input type="submit" value="Quitar todos">
                    </form>
                </td>
            </tr>

            <?php } ?>
            <tr>
                <td>Total</td>
                <td><?= $_SESSION['precioTotal'] ?>€</td>
                <td><?= $_SESSION['total'] ?></td>
                <td>
                    <form action="index.php" method="post">
                        <input type="submit" value="Comprar todo">
                    </form>
                </td>
                <td>
                    <form action="removeCart.php" method="post">
                        <input type="submit" name="deleteCart" value="Vaciar cesta">
                    </form>
                </td>
            </tr>
        </table>
        <?php }else{ ?>
            <h3 class="cesta-vacia">La cesta esta vacía</h3>
        <?php } ?>
        <form action="index.php" method="post">
            <input type="submit" value="Volver a la tienda">
        </form>
    </main>
</body>
</html>