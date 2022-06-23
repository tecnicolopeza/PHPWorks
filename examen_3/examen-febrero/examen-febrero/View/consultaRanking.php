<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <h1>CONSULTA EL JUGADOR EN UN PUESTO DEL RANKING</h1>
        <form action="../controller/consultaRanking.php" method="post">
            Puesto
            <input type="number" name="puesto" id="puesto">
            <input type="submit" value="CONSULTAR">
        </form>
        <form action="../controller/cerrar.php" method="post">
            <input type="submit" value="VOLVER">
        </form>
        <?php
        if ($jugador) {
        ?>
            <div class="info__puesto">
                <h2>Puesto: <?= $_POST['puesto'] ?></h2>
                <h2>Nombre: <?= $jugador->getNombre() ?></h2>
                <h2>Puntos: <?= $jugador->getPuntos() ?></h2>
                <h2>Marca: <?= $jugador->getMarca() ?></h2>
            <?php
        } elseif (isset($_POST['puesto']) and 1 > $puesto or $puesto > count($_SESSION['posicion']) ) {
            ?>
            <h2>ningún jugador</h2>
            <?php
        }
            ?>

            </div>

    </div>
</body>

</html>