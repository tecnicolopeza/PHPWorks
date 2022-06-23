<?php require_once '../Model/Articulo.php';

if (isset($_REQUEST['i'])) {
    $_REQUEST['titulo'];
    $_REQUEST['contenido'];
    $articulo = new Articulo(NULL , $_REQUEST['titulo'], NULL, $_REQUEST['contenido']);
    $articulo->insert();
}
// Carga la vista de listado
include '../Views/insertarArticulos.php';