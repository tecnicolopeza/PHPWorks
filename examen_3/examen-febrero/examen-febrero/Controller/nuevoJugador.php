<?php
require_once '../Model/Jugadores.php';

$jugador=new Jugadores(null, $_POST['nombre'], $_POST['puntos'], $_POST['marca'] );
$jugador->insert();
header("location: ../controller/index.php");

