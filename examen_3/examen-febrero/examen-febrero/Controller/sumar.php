<?php
require_once '../Model/Jugadores.php';
session_start();

$jugador = Jugadores::getJugadorById($_REQUEST['id']);
$jugador->update();
$_SESSION['jornada'] += 1;

header("location: ../controller/index.php");
