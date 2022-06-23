<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Conversor euros a pesetas y viceversa</h1>
    <form action="" method="post">
        <label for="moneda">¿Qué moneda desea convertir?</label>
        <select name="moneda" id="moneda">
            <option value="euros">euros</option>
            <option value="pesetas">pesetas</option>
        </select><br><br>
        <label for="cantidad">Cantidad: </label>
        <input type="number" name="cantidad" id="cantidad" step="0.01">
        <input type="submit" value="convertir" style="cursor:pointer;">
    </form>

    <?php
    if (isset($_REQUEST['cantidad'])) {
        $moneda = $_REQUEST['moneda'];
        $cantidad = $_REQUEST['cantidad'];        

        $datos = file_get_contents("http://localhost/PHP_RECUPERACION_JUNIO/Tema12/conversor_euros_pesetas/conversor.php?moneda=".$moneda."&cantidad=".$cantidad);
        $datos = json_decode($datos);

        echo "<fieldset style='width: 280px; margin-top: 2rem;'>";
            echo "<legend>Conversion</legend>";
            echo "<p>Codigo: ".$datos->codigo."</p>
            <p>Moneda: ".$datos->moneda."</p>
            <p>Mensaje: ".$datos->mensaje."</p>
            <p>Resultado: ".$datos->resultado."</p>";
        echo "</fieldset>";
    }
    ?>
</body>

</html>