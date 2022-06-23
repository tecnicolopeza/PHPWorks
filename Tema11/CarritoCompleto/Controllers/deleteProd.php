<?php 
require_once '../Model/Cart.php';
include_once 'session.php';
require_once 'accessControl.php';

if (isset($_REQUEST['deleteProdId'])) { //borra producto por id
    $data['prodId'] = $_REQUEST['deleteProdId'];
    $producto = new Cart(NULL, $_SESSION['user']['id'], $_REQUEST['deleteProdId']);
    $producto->delete($data['prodId']);
    $_SESSION['alert']['type'] = "deleteToCart";
}

if (isset($_REQUEST['emptyCart'])) {
    Cart::emptyCart(); //vacia carrito
    $_SESSION['alert']['type'] = "deleteAllToCart";
}

header('Location: showCart.php');

?>