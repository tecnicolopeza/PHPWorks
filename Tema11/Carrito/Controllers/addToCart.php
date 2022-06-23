<?php
require_once '../Model/Producto.php';
include_once 'session.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    $_SESSION['totalProdCart'] = 0;
    $_SESSION['totalPrice'] = 0;
}

if (isset($_REQUEST['prodAddToCart'])) {

    $_SESSION['totalProdCart']++; //total prod carrito
    // Obtiene todos los PRODUCTOS por ID
    $data['product'] = Producto::getProductById($_REQUEST['prodAddToCart']);

    $_SESSION['totalPrice'] += $data['product']->getPrice(); //total money cart

    $data['id'] = $data['product']->getId();
    $data['name'] = $data['product']->getName();
    $data['description'] = $data['product']->getDescription();
    $data['price'] = $data['product']->getPrice();
    $data['image'] = $data['product']->getImage();

    if (array_key_exists($data['id'], $_SESSION['cart'])) {
        $_SESSION['cart'][$data['id']][4]++; //cantidad del producto en carrito
    } else {
        $_SESSION['cart'][$data['id']][0] = $data['name'];
        $_SESSION['cart'][$data['id']][1] = $data['description'];
        $_SESSION['cart'][$data['id']][2] = $data['price'];
        $_SESSION['cart'][$data['id']][3] = $data['image'];
        $_SESSION['cart'][$data['id']][4] = 1; //cantidad del producto en carrito
        $_SESSION['cart'][$data['product']->getId()][5] = $data['product']->getId(); //id
    }

}

// include '../Views/cartView.php';
header("Location: index.php");
