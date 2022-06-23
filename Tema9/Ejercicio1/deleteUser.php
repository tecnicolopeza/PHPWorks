<?php 

include_once('conexion.php');

if (isset($_REQUEST['deleteUser'])) {
    $consulta = $conexion->query("SELECT dni FROM usuarios WHERE dni='".$_REQUEST['deleteUser']."'");

    if ($consulta->rowCount() > 0) { #comprueba si existe ese dni
        $delete = "DELETE FROM usuarios WHERE dni='".$_REQUEST['deleteUser']."'"; #consulta de borrado
        $conexion->exec($delete); #consulta de ejecucion
        // echo '<script language="javascript">alert("Se borró el registro con éxito.");</script>';
    }
    header('Location: index.php');
}



?>