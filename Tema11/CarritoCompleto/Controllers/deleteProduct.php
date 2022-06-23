<?php 
require_once '../Model/Producto.php';
include_once 'session.php';
require_once 'accessControl.php';

// Obtiene todos los PRODUCTOS por nombre
if (isset($_REQUEST['name'])) {
    $data['name'] = $_REQUEST['name']; 
    $data['products'] = Producto::searchProduct($data['name']);
}

if (isset($_REQUEST['deleteProd'])) {
    $data['prodId'] = $_REQUEST['deleteProd'];
    $producto = new Producto($data['prodId'], NULL, NULL, NULL, NULL, NULL);
    $producto->delete();
    $_SESSION['alert']['type'] = "deleteProduct";
}

// Carga la vista de delete prod
include '../Views/deleteProductView.php';