<?php
require_once '../Model/Jugadores.php';
require_once '../Model/Marcas.php';

$codEstado = 400;
$mensaje = 'Solicitud incorrecta';
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
  if (isset($_REQUEST['nombre'])) {
    $resultado = Jugadores::getJugadoresFiltroNombre($_REQUEST['nombre']);
    foreach ($resultado as $fila) {
      $devolver['alumnos'][] = [
        'matricula' => $fila->getId(),
        'nombre' => $fila->getNombre(),
        'apellidos' => $fila->getPuntos(),
        'curso' => $fila->getMarca()
      ];
    }
  } else if (isset($_REQUEST['marca']) && isset($_REQUEST['top'])) {
    $resultado = Jugadores::getJugadoresFiltroJugMarca($_REQUEST['marca'], $_REQUEST['top']);
    foreach ($resultado as $fila) {
      $devolver['alumnos'][] = [
        'matricula' => $fila->getId(),
        'nombre' => $fila->getNombre(),
        'apellidos' => $fila->getPuntos(),
        'curso' => $fila->getMarca()
      ];
    }
  } else if (isset($_REQUEST['top']) && !isset($_REQUEST['marca'])) {
    $resultado = Jugadores::getSumaMarca();
    $devolver['sumaMarcas'] = $resultado;
  }
  if (count($resultado) == 0) {
    $mensaje = "SIN RESULTADOS";
    $codEstado = 404;
  } else {
    $mensaje = "SE HAN ENCONTRADO COINCIDENCIAS";
    $codEstado = 200;
  }
}


$devolver['mensaje'] = $mensaje;
$devolver['codEstado'] = $codEstado;
//setCabecera($codEstado,$mensaje); 
echo json_encode($devolver);

function setCabecera($codEstado, $mensaje)
{
  //Si usamos la funcion setCabecera y establecemos en header un codigo distinto de 200 (status OK) provocará un error en el cliente, 
  //por eso es mejor tratar el error en la respuesta devuelta en el array $devolver y el cliente pueda analizar el mensaje
  header("HTTP/1.1 $codEstado $mensaje");
  header("Content-Type: application/json;charset=utf-8");
}
