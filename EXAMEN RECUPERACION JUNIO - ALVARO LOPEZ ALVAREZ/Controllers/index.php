<?php 
require_once '../Model/Mascota.php';
require_once 'session.php';
require_once 'accessControl.php';

$data['animalesPorTipos'] = Mascota::getListaTipoAnimales();
$data['mascotasAdoptadas'] = Mascota::getMascotasById();


if(isset($_REQUEST['tipoAnimal']) && $_REQUEST['tipoAnimal']!="todos"){
    $data['tipoAnimal'] = $_REQUEST['tipoAnimal'];
    $data['mascotas'] = Mascota::getAnimalesSinAdoptarPorTipo($data['tipoAnimal']);
}else{
    $data['mascotas'] = Mascota::getMascotasSinAdoptar();
}

include '../Views/indexView.php';
?>