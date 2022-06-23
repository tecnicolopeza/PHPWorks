<?php if ( session_status() == PHP_SESSION_NONE) { session_start(); }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>
        Ejercicio 4
        Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los programas de
        la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión con un nombre de usuario
        y contraseña correctos.
    </h2>

    <?php

        if (isset($_REQUEST['pswd'])) {
            //Puedo tambien acceder mediante clave valor a un array asociativo con contain
            if ($_REQUEST['pswd']=='1234' && $_REQUEST['usuario']=='user') {
                $_SESSION['usuario'] = 'logueado';
            }
        }
    
        if (isset($_SESSION['usuario'])) {
            header("Location: resultado.php");
            exit();
        }else{

    ?>

    <form action="#" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">
        <label for="pswd">Contraseña:</label>
        <input type="text" name="pswd" id="pswd">
        <input type="submit" value="Loguearse">
    </form>

    <?php  
        }
    ?>

</body>
</html>