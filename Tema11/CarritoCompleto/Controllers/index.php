<?php
require_once '../Model/Producto.php';
include_once 'session.php';
include_once 'navbar.php';
require_once 'accessControl.php';
// Obtiene todos los PRODUCTOS

if(isset($_REQUEST['tipo'])){
    $data['order'] = $_REQUEST['tipo'];
}else{
    $data['order'] = "a";
}
$data['products'] = Producto::getProducts($data['order']);

//SESSION['alerts'] para los mensajes de control
if (!isset($_SESSION['alert'])) {
    $_SESSION['alert']['type']="";
}

// Carga la vista de listado
include '../Views/indexView.php';