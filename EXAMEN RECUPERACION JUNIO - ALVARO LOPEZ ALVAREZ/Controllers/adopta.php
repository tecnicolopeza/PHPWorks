<?php 
require_once '../Model/Mascota.php';
include_once 'session.php';

if(isset($_REQUEST['idAdopta'])){

    $data['idUsuario'] = $_SESSION['id'];
    $data['idMascota'] = $_REQUEST['idAdopta'];

    $adopta = new Mascota($data['idMascota'],"","",$data['idUsuario']);
    $adopta->update();

    header('Location: index.php');
}

?>