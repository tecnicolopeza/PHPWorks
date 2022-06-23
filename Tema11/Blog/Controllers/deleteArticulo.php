<?php require_once '../Model/Articulo.php';

if (isset($_REQUEST['deleteArticulo'])) {
    $articulo = new Articulo($_REQUEST['deleteArticulo']);
    $articulo->delete();
}

include 'index.php';

// header('Location: ' . $_SERVER['HTTP_REFERER']); 
// exit;

