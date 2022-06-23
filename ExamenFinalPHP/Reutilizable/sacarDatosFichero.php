<?php 

$fp = fopen('usuarios.txt', 'r');
while (!feof($fp)) {
    $linea = explode(',', fgets($fp));
    $_SESSION['usuario']['nombre'][] = trim($linea[0]);
    $_SESSION['usuario']['perfil'][] = trim($linea[1]);
}

fclose($fp);

print_r($_SESSION['usuario']);

echo "<br>TAMAÑO ARRAY NOMBRE: ".count($_SESSION['usuario']['nombre']);
echo "<br>Datos nombre[0]: ".$_SESSION['usuario']['nombre'][0];
echo "<br>Datos perfil[0]: ".$_SESSION['usuario']['perfil'][0];

