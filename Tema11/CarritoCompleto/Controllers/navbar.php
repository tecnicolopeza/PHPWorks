<?php 
require_once '../Model/User.php';
require_once '../Model/Cart.php';

$data['count'] = Cart::totalQuantity(); 

if (isset($_SESSION['user']['nick'])) {
    $data['user'] = User::getUser($_SESSION['user']['nick']); #devuelve el usuario con ese nombre
}
?>