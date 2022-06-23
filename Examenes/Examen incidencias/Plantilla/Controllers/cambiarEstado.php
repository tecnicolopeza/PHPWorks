<?php require_once '../Model/Incidencia.php';
include_once 'session.php';
require_once 'accessControl.php';

if (isset($_REQUEST['idIncidencia'])) {
    $data['idIncidencia'] = $_REQUEST['idIncidencia'];
    $incidencia = new Incidencia($data['idIncidencia'], NULL, NULL);
    $incidencia->cambiarEstado();
}

header('Location: index.php');