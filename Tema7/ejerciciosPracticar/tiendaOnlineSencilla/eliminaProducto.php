<?php 
session_start();

//Eliminar un producto del carrito
if (isset($_REQUEST['eliminaProducto'])) {
    if ($_SESSION['prodCarrito'][$_REQUEST['eliminaProducto']] == 1) {
        unset($_SESSION['prodCarrito'][$_REQUEST['eliminaProducto']]);
        $_SESSION['cantidad']--;
    }else{
        $_SESSION['prodCarrito'][$_REQUEST['eliminaProducto']]--;
        $_SESSION['cantidad']--;
    }
}

//Vaciar carrito
if (isset($_REQUEST['vaciarCarrito'])) {
    $_SESSION['cantidad'] = 0;
    $_SESSION['prodCarrito'] = [];
}

header('Location: tienda.php');
?>