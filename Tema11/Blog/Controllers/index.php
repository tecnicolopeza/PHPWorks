<?php require_once '../Model/Articulo.php';
// Obtiene todos los articulos
$data['articulos'] = Articulo::getArticulos();
// Carga la vista de listado
include '../Views/listadoArticulos.php';