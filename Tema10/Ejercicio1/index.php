<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('Empleado.php');

#Si ya exite la sesion recuperamos el objeto
if (isset($_SESSION['empleados'])){ 
    $empleado1=unserialize($_SESSION['empleados']); 
} else { #sino lo creamos y lo serializamos guardandolo en el array de session
    $empleado1 = new Empleado('fernando', 1500);
    $_SESSION['empleados']= serialize($empleado1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Actualizar sueldo empleados</h1>
    <form action="#" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label for="sueldo">Sueldo: </label>
        <input type="number" name="sueldo" id="sueldo" min="500">
        <input type="submit" value="Actualizar sueldo">
    </form>

    <?php
    if (isset($_REQUEST['nombre'])) {

        if ($_REQUEST['nombre'] == $empleado1->getNombre()) {
            echo "<br>Sueldo antes de actualizar de " . $empleado1->getNombre() . " es " . $empleado1->getSueldo() . "€.<br>";
            $empleado1->asigna($_REQUEST['nombre'], $_REQUEST['sueldo']);
            echo "Sueldo al actualizar de " . $empleado1->getNombre() . " es " . $empleado1->getSueldo() . "€.<br>";
            if ($empleado1->pagaImpuestos()) {
                echo "Este trabajador paga impuestos porque cobra mas de 3000€";
            }else{
                echo "Este trabajador no paga impuestos porque cobra menos de 3000€";
            }
        }else{
            echo "El empleado ".$_REQUEST['nombre']." no existe en nuestra BD.";
        }

    }

    ?>
</body>

</html>