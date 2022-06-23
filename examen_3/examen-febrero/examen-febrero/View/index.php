<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="StyleSheet" href="../View/estilos.css" type="text/css">
  <title>
  WORLD PÁDEL TOUR
  </title>
  </meta>
</head>

<body>
  <div class="contenedor">
    <h1>
      WORLD PÁDEL TOUR
    </h1>
    <h3>Partidos de la jornada: <?= $_SESSION['jornada'] ?></h3>
    <table>
      <tr>
        <th>Puesto</th>
        <th>Nombre</th>
        <th>Puntos</th>
        <th>Marca</th>
        <th>Sumar Puntos</th>
      </tr>
      <?php
      $puesto = 0;
      foreach ($data['jugadores'] as $jugador) {
        $puesto += 1;
      ?>
        <tr>
          <td><?= $puesto ?></td>
          <td><?= $jugador->getNombre() ?></td>
          <td><?= $jugador->getPuntos() ?></td>
          <td><?= $jugador->getMarca() ?></td>
          <td>
            <form action="../controller/sumar.php" method="post">
              <input type="hidden" name="id" value="<?= $jugador->getId() ?>">
              <input type="submit" value="Sumar">
            </form>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
    <br><br>
    <h3><a href="../controller/getMarca.php">Nuevo Jugador</a></h3>
    <h3><a href="../controller/consultaRanking.php">Consultar por puesto</a></h3>
    <form action="../controller/fichero.php" method="post">
    Generar Ranking de puntuacion  
    <input type="submit" value="Volcar al fichero">
    </form>
  </div>
</body>

</html>