<?php
require_once '../Model/Producto.php';
include_once 'session.php';
include_once 'navbar.php';
require_once 'accessControl.php';

// Añade el producto
if (isset($_REQUEST['name'])) {

    $data['name'] = $_REQUEST['name'];
    $data['description'] = $_REQUEST['description'];
    $data['price'] = $_REQUEST['price'];
    $data['stock'] = $_REQUEST['stock'];

    $directorio = "../Views/images/";
    $subir_archivo = $directorio . basename($_FILES['image']['name']);

    move_uploaded_file($_FILES['image']['tmp_name'], $subir_archivo);

    $producto = new Producto(NULL, $data['name'], $data['description'], $data['price'], $subir_archivo, $data['stock']);
    $producto->insert();
    $_SESSION['alert']['type'] = "addProduct";
}

// Carga la vista de listado
include '../Views/addProductView.php';
