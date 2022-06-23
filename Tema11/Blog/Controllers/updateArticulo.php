<?php require_once '../Model/Articulo.php';

$articulo=new Articulo($_REQUEST['updateClick'], $_REQUEST['titulo'], $_REQUEST['fecha'], $_REQUEST['contenido']);
$articulo->update();

// header('Location: ' . $_SERVER['HTTP_REFERER']);
header('Location: updateClick.php'); //lo de arriba tb funciona