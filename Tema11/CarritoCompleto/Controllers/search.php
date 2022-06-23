<?php 
require_once '../Model/Producto.php';
include_once 'session.php';
require_once 'accessControl.php';

// Obtiene todos los PRODUCTOS
if (isset($_REQUEST['name'])) {
    $data['name'] = $_REQUEST['name']; 
    $data['products'] = Producto::searchProduct($data['name']);
    $_SESSION['alert']['type'] = "search";
}

// Carga la vista de search
include '../Views/searchView.php';
