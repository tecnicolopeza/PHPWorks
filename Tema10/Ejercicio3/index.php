<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('Cubo.php');

#Si ya exite la sesion recuperamos el objeto
if (isset($_SESSION['cubo1'])){ 
    $cubo1=unserialize($_SESSION['cubo1']); 
    $cubo2=unserialize($_SESSION['cubo2']); 
}else{
    $cubo1 = new Cubo(10, 0);#creo el objeto
    $cubo2 = new Cubo(20, 20);#creo el objeto
    $cubo3 = new Cubo(20, 5);#creo el objeto
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cubos</title>
</head>
<body>

<?php 
    echo "<h4>Momento inicial</h4>";
    echo "Cubo 1: ".$cubo1;
    echo "Cubo 2: ".$cubo2;
    echo "Cubo 3: ".$cubo3;

    echo "<br><h4>Verter de cubo2 a cubo1</h4>";
    echo $cubo1->verter($cubo2);
    echo "Cubo 1: ".$cubo1;
    echo "Cubo 2: ".$cubo2;

    echo "<br><h4>Verter de cubo2 a cubo1</h4>";
    echo $cubo1->verter($cubo2);
    echo "Cubo 1: ".$cubo1;
    echo "Cubo 2: ".$cubo2;

    echo "<br><h4>Verter de cubo1 a cubo3</h4>";
    echo $cubo3->verter($cubo1);
    echo "Cubo 1: ".$cubo1;
    echo "Cubo 3: ".$cubo3;

    echo "<br><h4>Verter de cubo1 a cubo3</h4>";
    echo $cubo3->verter($cubo1);
    echo "Cubo 1: ".$cubo1;
    echo "Cubo 3: ".$cubo3;
?>

</body>
</html>