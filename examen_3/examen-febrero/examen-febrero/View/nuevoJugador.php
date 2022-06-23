<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>NUEVO JUGADOR DEL WORDL PADEL TOUR</h1>
    <form action="../controller/nuevoJugador.php" method="post">
        Nombre
        <input type="text" name="nombre" id="nombre">
        Puntos
        <input type="number" name="puntos" id="puntos">
        Marca
        <select name="marca" id="marca">
            <?php
            foreach ($data['marcas'] as $jugador) {
            ?>
            
                <option value="<?= $jugador->getNombre() ?>"><?= $jugador->getNombre() ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" value="GRABAR">
    </form>
</body>

</html>