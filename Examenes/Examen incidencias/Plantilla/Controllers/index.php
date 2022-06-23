<?php 
require_once '../Model/Incidencia.php';
include_once 'session.php';
require_once 'accessControl.php';

$data['incidencias'] = Incidencia::getIncidencias();
if($_SESSION['perfil']=="admin"){
    include '../Views/indexView.php';
}
?>