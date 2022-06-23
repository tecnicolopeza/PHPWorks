<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php 
echo "fecha de hoy es ".date("d-m-Y")."<br>";
if (!isset($_SESSION['mascotas'])) {
   $_SESSION['mascotas'] = [];
}
if (isset($_POST['fecha'])) {
    $_SESSION['mascotas'] = [];
    $fecha="#".$_POST['fecha']."#";
    $file= fopen("mascotas.txt","r");
    //Recorremos hasta encontrar la fecha o fin del fichero
    do{
        $linea=trim(fgets($file));
    }while($linea!=$fecha && !feof($file));
    //Recorremos hasta siguiente fecha o fin del fichero
    do{
        $linea=fgets($file);
        if (!str_starts_with($linea,"#") && $linea!="") {
            $pet=explode('-', $linea);
            $_SESSION['mascotas'][$pet[0]]=[$pet[1],$pet[2]];
        }
    }while(!str_starts_with($linea,"#") && !feof($file));
    echo '<table border = "1">';
    echo '<tr><th colspan="4">FECHA: '.$fecha.'</th></tr>';
    echo '<tr><th>Nombre</th><th>Animal</th><th>Edad</th></tr>';
    if (isset($_SESSION['mascotas'])) {
    foreach ($_SESSION['mascotas'] as $nombre => $mascota) {
        echo "<tr><td>$nombre</td><td>$mascota[0]</td><td>$mascota[1]</td></tr>";
    }
    }
    echo "</table>";
    fclose($file);
}
$file= fopen("mascotas.txt","r");
$fechas=[];
$linea=trim(fgets($file));
//echo "<br>".$linea;
while(!feof($file)) {
    if (substr($linea,0,1)=="#") {
        $fechas[]=substr($linea,1,-1);
    }
    $linea=trim(fgets($file));
    //echo "<br>".$linea;
}
fclose($file);
?>
<br><br>
<form action="#" method="post">
    fecha inscripción mascotas:
    <select name="fecha">
<?php 
    foreach ($fechas as $fecha) {
        echo "<option value=$fecha>$fecha</option>";
    }
 ?>            
    </select>
    <input type="submit" value="Cargar MASCOTAS">
</form>
</body>
</html>