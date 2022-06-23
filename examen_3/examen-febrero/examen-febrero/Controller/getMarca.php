<?php
require_once '../Model/Marcas.php';

$data['marcas'] = Marcas::getMarcas();
include '../View/nuevoJugador.php';