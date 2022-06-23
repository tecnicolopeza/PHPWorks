<?php
require_once '../Model/Producto.php';
require_once '../Model/Cart.php';
include_once 'session.php';
require_once 'accessControl.php';

$data['products'] = Producto::getCart();
$data['totalPrice'] = Producto::totalPrice();
$data['totalQuantity'] = Cart::totalQuantity();

include '../Views/cartView.php';
