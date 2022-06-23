<?php require_once '../Model/Articulo.php';

// Obtiene todos los articulos
if (isset($_REQUEST['m'])) {
    $data['articulos'] = Articulo::getArticuloById($_REQUEST['updateArticulo']);
}else{
    header('Location: index.php?m'); //no se como arreglar para no pasarlo por parametro
}

include '../Views/updateClick.php';

