<?php
require_once '../Model/Cart.php';
include_once 'session.php';
require_once 'accessControl.php';

if (isset($_REQUEST['prodAddToCart'])) {
    $data['prodId'] = $_REQUEST['prodAddToCart'];
    $producto = new Cart(NULL, $_SESSION['user']['id'], $data['prodId'], 1);
    $producto->insert();
    $_SESSION['alert']['type'] = "addToCart";
}

// include '../Views/cartView.php';
header("Location: index.php");
