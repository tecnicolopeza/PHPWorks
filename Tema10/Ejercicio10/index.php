<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('Bombilla.php');

if (isset($_REQUEST['nombre'])) { #si se ha creado una bombilla
    $_SESSION['bombillas'][] = new Bombilla($_REQUEST['estado'],$_REQUEST['potencia'],$_REQUEST['nombre']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombillas</title>
</head>

<body>
    <h1>Prueba objeto Bombilla</h1>
    <form action="" method="post">
        Crear nueva bombilla:
        <input type="text" name="nombre" placeholder="Lugar" required>
        <input type="number" step="0.1" name="potencia" placeholder="Potencia" required>
        <select name="estado" required>
            <option value="0">apagada</option>
            <option value="1">encendida</option>
        </select>
        <input type="submit" value="Crear">
    </form>

    <?php 
        if (isset($_REQUEST['nombre'])) {
            print_r($_SESSION['bombillas']);
        }
    ?>
</body>

</html>