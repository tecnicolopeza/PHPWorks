<?php require_once '../Model/Articulo.php';

if (isset($_REQUEST['nameArticle'])) {
    $title = $_REQUEST['nameArticle'];
    $data['articulos'] = Articulo::getArticuloByTitle($title);
}

include '../Views/articulosPorTitulo.php';
