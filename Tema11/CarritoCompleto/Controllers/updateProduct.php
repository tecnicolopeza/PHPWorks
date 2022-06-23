<?php
require_once '../Model/Producto.php';
include_once 'session.php';
require_once 'accessControl.php';

// Obtiene todos los PRODUCTOS por nombre
if (isset($_REQUEST['name'])) {
    $data['name'] = $_REQUEST['name'];
    $data['products'] = Producto::searchProduct($data['name']);
}

// Muestra el objeto por id en el formulario
if (isset($_REQUEST['update'])) {
    $data['id'] = $_REQUEST['update'];
    $data['product'] = Producto::getProductById($data['id']);
}
//Actualiza en la BD
if (isset($_REQUEST['updateProd'])) { //parametro formUpdateProduct
    
    $data['prodId'] = $_REQUEST['updateProd'];
    $data['name'] = $_REQUEST['name'];
    $data['description'] = $_REQUEST['description'];
    $data['price'] = $_REQUEST['price'];
    $data['stock'] = $_REQUEST['stock'];
    $data['image'] = $_FILES['image'];
    
    // $_FILES['image'] es un array, sino se añadió imagen el campo name etc vienen vacios
    
    $data['product'] = Producto::getProductById($data['prodId']);

    if (!empty($data['image']['name'])) { //si se insertó nueva imagen
        $directorio = "../Views/images/";
        $subir_archivo = $directorio . basename($_FILES['image']['name']);
    
        move_uploaded_file($_FILES['image']['tmp_name'], $subir_archivo);

        $producto = new Producto($data['prodId'], $data['name'], $data['description'], $data['price'], $subir_archivo, $data['stock']);
        $producto->update();
    }else{
        $producto = new Producto($data['prodId'], $data['name'], $data['description'], $data['price'], $data['product']->getImage(), $data['stock']);
        $producto->update();
    }
    $_SESSION['alert']['type'] = "updateProduct";
    
    // header("Refresh:0; url=updateProduct.php");
    header("Location: updateProduct.php?u");

}

// Carga la vista de update prod
include '../Views/updateProductView.php';
