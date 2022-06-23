<?php 

include_once('conexion.php');

if (isset($_REQUEST['updateUser'])) {
    $consulta = $conexion->query("SELECT dni FROM usuarios WHERE dni='".$_REQUEST['updateUser']."'");

    if ($consulta->rowCount() > 0) { #comprueba si existe ese dni
        $update = "UPDATE usuarios SET dni='".$_REQUEST['dni']."', nombre='".$_REQUEST['nombre']."', direccion='".$_REQUEST['direccion'].
        "', telefono='".$_REQUEST['telefono']."' WHERE dni='".$_REQUEST['updateUser']."'"; #consulta de update
        $conexion->exec($update); #consulta de ejecucion
        // echo'<script type="text/javascript">
        // alert("Tarea Guardada");
        // window.location.href="index.php";
        // </script>';
    }
    header('Location: index.php');
}


?>