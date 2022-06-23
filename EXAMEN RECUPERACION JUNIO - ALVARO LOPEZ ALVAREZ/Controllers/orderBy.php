<?php 
require_once '../Model/Mascota.php';
include_once 'session.php';

$data['animalesPorTipos'] = Mascota::getListaTipoAnimales();

// print_r($data['animalesPorTipos']);

// echo "<br><br>";

// foreach ($data['animalesPorTipos'] as $animal){
//     echo "<br>Animal: ".$animal;
// }
?>