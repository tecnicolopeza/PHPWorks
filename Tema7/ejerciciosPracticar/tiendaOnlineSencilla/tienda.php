<?php 
if ( session_status() == PHP_SESSION_NONE) { session_start();}
include_once('controlAcceso.php');
include_once('productos.php');

if (!isset($_SESSION['prodCarrito'])) {
    $_SESSION['prodCarrito'] = []; #productos del carrito [session][nombre_producto] => cantidad(int)
    $_SESSION['total'] = 0; #session total
    $_SESSION['cantidad'] = 0; #session cantidad
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tienda.css">
    <title>Tienda</title>
</head>
<body>
    <main>
        <header>
            <h2>APRENDE PHP CON EJERCICIOS</h2>
            <h3>SOLUCIONES A LOS EJERCICIOS</h3>

            <h4>Sesiones y Cookies</h4>
            <?php
                echo "<p>Bienvenido <span>".$_SESSION['usuario']."</span></p>";
                // echo "<p>Bienvenido <span>Usuario</span></p>";
            ?>
        </header>
        <div class="contenido">
            <section class="tienda">
                <h1>Tienda</h1>
                <?php 
                    foreach ($productos as $producto => $value) {
                        echo "<img class='imagen-producto' src='$value[2]'  alt='$producto'>";
                        echo "<p>".$value[0]."</p>";
                        echo "<p>Precio: ".$value[1]."€</p>";
                        echo "<form action='#' method='post'><input type='submit' value='Añadir al carrito'>";
                        echo "<input type='hidden' value='".$producto."' name='addCart'></form>";
                    }
                ?>
            </section>
            <section class="carrito">
                <h1>Carrito</h1>
                <?php 
                    if (isset($_REQUEST['addCart'])) {
                        //array asociativo cesta que guarda nombre y cantidad
                        if (array_key_exists($_REQUEST['addCart'], $_SESSION['prodCarrito'])) {
                            $_SESSION['prodCarrito'][$_REQUEST['addCart']]++; #suma 1 al producto correspondiente
                        }else{
                            $_SESSION['prodCarrito'][$_REQUEST['addCart']] = 1;#añade el producto con cantidad uno
                        }
                        $_SESSION['cantidad']++; #Suma uno a la cantidad de productos en el carrito

                    }
                    echo "<h5>Cantidad productos: ".$_SESSION['cantidad']."</h5>";
                    foreach ($_SESSION['prodCarrito'] as $producto => $value) {
                        if (array_key_exists($producto, $productos)) {
                            // echo "Key: ".$producto." existe";
                            echo "<img class='imagen-carrito' src='".$productos[$producto][2]."'  alt='$producto'>";
                            echo "<p>".$productos[$producto][0]."</p>";
                            echo "<p>Precio: ".$productos[$producto][1]."€</p>";
                            echo "<p>Cantidad: ".$value."</p>";
                            echo "<form action='eliminaProducto.php' method='post'><input type='submit' value='Eliminar uno'>";
                            echo "<input type='hidden' value='".$producto."' name='eliminaProducto'></form>";
                        }   
                    }
                    if (!empty($_SESSION['prodCarrito'])) {
                        echo "<form action='eliminaProducto.php' method='post'><input type='submit' value='Vaciar carrito'>";
                        echo "<input type='hidden' value='vaciar' name='vaciarCarrito'></form>";
                    }
                    
                ?>
            </section>
        </div>

</main>
</body>
</html>