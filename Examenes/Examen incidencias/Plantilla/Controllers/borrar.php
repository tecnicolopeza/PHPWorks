<?php require_once '../Model/Incidencia.php';

if (isset($_REQUEST['borrar'])) {
    $data['id'] = $_REQUEST['borrar'];
    $incidencia = new Incidencia($data['id'], NULL, NULL);
    $incidencia->delete();
}

header('Location: index.php');