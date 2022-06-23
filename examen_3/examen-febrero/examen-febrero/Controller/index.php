<?php
require_once '../Model/Jugadores.php';
require_once '../Model/Marcas.php';
session_start();

$data['jugadores'] = Jugadores::getJugadores();
$data['puesto'] = Jugadores::getJugadores();
// Carga la vista principal de listado
if (!isset($_SESSION['jornada'])) {
    $_SESSION['jornada']=0;
}
$puesto = 0;
foreach ($data['puesto'] as $jugador) {
  $puesto += 1;
  $posicion[$puesto] = $jugador->getId();
  $_SESSION['posicion'] = $posicion;
}
include '../View/index.php';