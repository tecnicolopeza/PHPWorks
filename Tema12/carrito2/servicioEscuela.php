<?php

require_once 'Model/Producto.php';
require_once 'Model/User.php';
$codEstado = 400;
$mensaje = 'Solicitud incorrecta';
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
  if (isset($_REQUEST['prod'])) {
    $resultado = Producto::searchProduct($_REQUEST['prod']);
    foreach ($resultado as $fila) {
      $devolver['productos'][] = ['nombre' => $fila->getName(), 'descripcion' => $fila->getDescription(), 'precio' => $fila->getPrice(), 'imagen' => $fila->getImage()];
    }
  }elseif(isset($_REQUEST['minPrice'])){
    $resultado = Producto::searchProductByPrice($_REQUEST['minPrice'],$_REQUEST['maxPrice']);
    foreach ($resultado as $fila) {
      $devolver['productos'][] = ['nombre' => $fila->getName(), 'descripcion' => $fila->getDescription(), 'precio' => $fila->getPrice(), 'imagen' => $fila->getImage()];
    }
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
