<?php
session_start();
require_once '../Model/Jugadores.php';
$jugador = NULL;
$puesto = NULL;
if (isset($_POST['puesto']) and 1 <= $_POST['puesto'] and $_POST['puesto'] <= count($_SESSION['posicion'])) {
    $puesto =$_POST['puesto'];
    $jugadorId = $_SESSION['posicion'][$puesto];
    $id= intval($jugadorId);

    $jugador = Jugadores::getJugadorById($id);
}
include '../View/consultaRanking.php';
