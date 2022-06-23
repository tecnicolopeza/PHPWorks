<?php 
require_once 'session.php';
require_once '../Model/Mascota.php';


if(isset($_REQUEST['insertDatosFichero'])){

    $fp = fopen('../Model/mascotas.txt', 'r');
    while (!feof($fp)) {
        $linea = explode(',', fgets($fp));
        $mascota['nombre'][] = trim($linea[0]);
        $mascota['animal'][] = trim($linea[1]);
    }
    fclose($fp);

    // DELETE FROM `mascota` WHERE nombre = 'dartacan' OR nombre = 'LASY' OR nombre = 'MICKEY' OR nombre = 'calimero' OR nombre = 'tom' OR nombre = 'jERRY'

    for ($i=0; $i < count($mascota['nombre'])-1; $i++) {
        $insert = new Mascota(NULL,$mascota['nombre'][$i],$mascota['animal'][$i],NULL);
        $insert->insert();
    }

    header('Location: index.php');

}

