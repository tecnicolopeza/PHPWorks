<?php 
session_start();
@include_once('updateCookies.php');
@include_once('unsetCookies.php');

//Eliminar un producto del carrito
if (isset($_REQUEST['rmvOne'])) {
    if ($_SESSION['prodCart'][$_REQUEST['rmvOne']] == 1) {
        unset($_SESSION['prodCart'][$_REQUEST['rmvOne']]);
        $_SESSION['total']--;
        $_SESSION['precioTotal']-= $_SESSION['productos'][$_REQUEST['rmvOne']][0];
    }else{
        $_SESSION['prodCart'][$_REQUEST['rmvOne']]--;
        $_SESSION['total']--;
        $_SESSION['precioTotal']-=$_SESSION['productos'][$_REQUEST['rmvOne']][0];
    }
    
    #COOKIES
    updateCookies();

    header('Location: cart.php');
}

#Eliminar total de los productos de un producto especifico
if (isset($_REQUEST['rmvAll'])) {
    $cantidadProducto = $_SESSION['prodCart'][$_REQUEST['rmvAll']];#precio del producto
    $precioProducto = $_SESSION['productos'][$_REQUEST['rmvAll']][0];#cantidad del producto
    
    $_SESSION['total'] -= $_SESSION['prodCart'][$_REQUEST['rmvAll']];
    $_SESSION['precioTotal'] -= $cantidadProducto*$precioProducto; #resta la cantidad del producto multiplicado por su precio
    
    unset($_SESSION['prodCart'][$_REQUEST['rmvAll']]); #elimina del cart ese producto
    
    #COOKIES
    updateCookies();
    
    header('Location: cart.php');

}

// Vaciar carrito
if (isset($_REQUEST['deleteCart'])) {
    $_SESSION['total'] = 0;
    $_SESSION['precioTotal'] = 0;
    $_SESSION['prodCart'] = [];

    #COOKIES
    unsetCookies();

    header('Location: cart.php');

}

?>