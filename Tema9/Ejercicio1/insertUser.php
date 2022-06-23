<?php 
    include_once('conexion.php');

    if (isset($_REQUEST['dni'])) {
        $consulta = $conexion->query("SELECT dni FROM usuarios WHERE dni='".$_REQUEST['dni']."'");
        if ($consulta->rowCount() > 0) {
            echo '<script language="javascript">alert("No se pudo insertar.");</script>';
        }else{
            $insercion = "INSERT INTO usuarios (dni, nombre, direccion, telefono) VALUES
                        ('$_REQUEST[dni]','$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]')";
            $conexion->exec($insercion); 
            // echo '<script language="javascript">alert("Se ha insertado con éxito.");</script>';
        }
        header('Location: index.php');
    }

