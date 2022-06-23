<?php
require_once '../Model/Jugadores.php';
$data['jugadores'] = Jugadores::getJugadores();
$file = fopen("../Model/ranking.txt", "w");

$puesto = 0;
fputs($file, "Ranking de jugadores del World Padel Tour" . PHP_EOL);
foreach ($data['jugadores'] as $jugador) {
    $puesto += 1;
    fwrite($file, $puesto . ',' . $jugador->getNombre() . ',' . $jugador->getPuntos() . PHP_EOL);
}
fclose($file);
header("location: ../controller/index.php");
