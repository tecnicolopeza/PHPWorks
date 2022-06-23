<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
    include_once('usuarios.php');
    require_once('controlAcceso.php');


        if (isset($_COOKIE['prodCart'])) {
            $_SESSION['prodCart'] = unserialize($_COOKIE['prodCart']);
            $_SESSION['total'] = $_COOKIE['total'];
            $_SESSION['precioTotal'] = $_COOKIE['precioTotal'];
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
    <title>Panel de control</title>
</head>

<body>
    <header>
        <div class="titulos tienda">
            <h1>La tiendecita</h1>
            <div>
                <?php
                if (isset($_SESSION['usuario'])) {
                    echo "<p style='text-align: center;'>Usuario <span>" . $_SESSION['usuario'] . "</span></p>";
                    echo "<p style='text-align: center;'>Cuenta tipo <span>" . $usuarios[$_SESSION['usuario']][1] . "</span></p>";
                }
                ?>
            </div>
            <form action="logout.php" method="post">
                <input id="btn-logout" type="submit" value="Cerrar Sesión">
            </form>
            <?php
            if ($usuarios[$_SESSION['usuario']][1] == "admin") {
            ?>
                <form action="index.php" method="post">
                    <input id="btn-panel" type="submit" value="Volver a la tienda">
                </form>
            <?php
            }
            ?>
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
                    <td><?= ucfirst($producto) ?></td>
                    <td><?= $value[0] ?>€</td>
                    <td><img src="<?= $value[2] ?>" alt="<?= $producto ?>"></td>
                    <td>
                        <form action="addCart.php" method="post">
                            <input type="hidden" name="producto" value="<?= $producto ?>">
                            <input type="submit" value="Añadir al carrito">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </main>
</body>

</html>