<?php 
require_once '../Model/Producto.php';
include_once 'session.php';

// Obtiene todos los PRODUCTOS
$data['products'] = Producto::getProducts();
// Carga la vista de listado
include '../Views/indexView.php';