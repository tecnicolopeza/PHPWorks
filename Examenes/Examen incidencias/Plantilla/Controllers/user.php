<?php 
require_once '../Model/Incidencia.php';
include_once 'session.php';
require_once 'accessControl.php';

$data['incidencias'] = Incidencia::getIncidenciasPendientes();

if(isset($_REQUEST['nuevaIncidencia'])){
    $data['descripcion'] = $_REQUEST['descripcion'];
    // $data['fecha'] = $_REQUEST['fecha'];
    $incidencia = new Incidencia(NULL, $data['descripcion'], $_SESSION['user'], NULL, 'PENDIENTE',  $_SESSION['perfil']);
    $incidencia->insert();
    header('refresh: 0, url=user.php');
}

if($_SESSION['perfil']=="user"){
    include '../Views/userView.php';
}
?>