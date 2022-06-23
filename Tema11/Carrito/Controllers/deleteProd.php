<?php 
include_once 'session.php';

if (isset($_REQUEST['emptyCart'])) {
    unset($_SESSION['cart']);
    unset($_SESSION['totalProdCart']);
    unset($_SESSION['totalPrice']);
}

if (isset($_REQUEST['deleteProdId'])) {
    $priceTotal = $_SESSION['cart'][$_REQUEST['deleteProdId']][2] * $_SESSION['cart'][$_REQUEST['deleteProdId']][4];
    $_SESSION['totalPrice'] -= $priceTotal;
    $_SESSION['totalProdCart'] -= $_SESSION['cart'][$_REQUEST['deleteProdId']][4];
    unset($_SESSION['cart'][$_REQUEST['deleteProdId']]);
}

header('Location: showCart.php');

?>