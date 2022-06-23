<?php 
session_start();

if (isset($_REQUEST['producto'])) {
    if (!array_key_exists($_REQUEST['producto'], $_SESSION['prodCart'])) {
        $_SESSION['prodCart'][$_REQUEST['producto']]=1; # crea la key con cantidad producto especifico
        $_SESSION['total']++;#cantidad productos carrito (total)
    }else{
        $_SESSION['total']++;
        $_SESSION['prodCart'][$_REQUEST['producto']]++;
    }
    $_SESSION['precioTotal']+=$_SESSION['productos'][$_REQUEST['producto']][0];
    header('Location: index.php');  
}

?>

