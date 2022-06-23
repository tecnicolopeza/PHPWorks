<?php 
if ( session_status() == PHP_SESSION_NONE) { session_start(); }
include_once('usuarios.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>

    <?php

        if (isset($_REQUEST['pswd'])) {
            // if ($_REQUEST['pswd']=='1234' && $_REQUEST['usuario']=='user') {
            if (array_key_exists($_REQUEST['usuario'], $usuarios) && ($_REQUEST['pswd'] == $usuarios[$_REQUEST['usuario']])) {
                $_SESSION['usuario'] = $_REQUEST['usuario'];
            }else{
                echo "<script language='javascript'>alert('Error en el usuario o contraseña');</script>";
            }
        }
    
        if (isset($_SESSION['usuario'])) {
            header("Location: tienda.php");
            exit();
        }else{

    ?>

    <div class="div_login">

        <h2>Login tienda estilográfica</h2>
        
        <form action="#" method="post" class="formulario">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <label for="pswd">Contraseña:</label>
            <input type="text" name="pswd" id="pswd" required>
            <input type="submit" value="Loguearse">
        </form>
    </div>

    <?php  
        }
    ?>

</body>
</html>