<?php if ( session_status() == PHP_SESSION_NONE) { 
    session_start();
    if (!isset($_SESSION['productos'])) {
        $_SESSION['productos'] = 
        [
            "raton" => [15, "raton óptico", "img/raton.png"],
            "teclado" => [25, "teclado gaming", "img/teclado.png"],
            "pantalla" => [70, "pantalla 30 pulgadas", "img/pantalla.png"],
            "mando" => [20, "mando compatible con pc, playstation y xbox", "img/mando.png"]
        ];
        $_SESSION['prodCart'] = [];
        $_SESSION['total'] = 0;
        $_SESSION['precioTotal'] = 0;
    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <div class="titulos tienda">
            <h1>La tiendecita</h1>
        </div>
        <div class="titulos cesta">
            <h1><a href="cart.php">Cesta</a></h1>
            <h4>Productos <span style="color: green;"><?= $_SESSION['total'] ?></span></h4>
        </div>

    </header>
    <main>
        <table>
            <thead>
                <th class="cabecera-tabla">Productos</th>
                <th class="cabecera-tabla">Precio</th>
                <th class="cabecera-tabla">Imagen</th>
                <th class="cabecera-tabla">Comprar</th>
            </thead>
            <?php  
                foreach ($_SESSION['productos'] as $producto => $value) {
            ?>
            <tr>
                <td><?=ucfirst($producto)?></td>
                <td><?=$value[0]?>€</td>
                <td><img src="<?= $value[2] ?>" alt="<?= $producto ?>"></td>
                <td>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="producto" value="<?=$producto?>">
                        <input type="submit" value="Añadir al carrito">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>

    </main>
</body>
</html>