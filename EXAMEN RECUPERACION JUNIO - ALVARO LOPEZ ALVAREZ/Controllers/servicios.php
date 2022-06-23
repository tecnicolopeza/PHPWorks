<?php

require_once '../Model/Mascota.php';
$codEstado = 400;
$mensaje = 'Solicitud incorrecta';
$metodo = $_SERVER['REQUEST_METHOD'];
if ($metodo == 'GET') { //LISTA ANIMALES
    if (isset($_REQUEST['idUsuario'])) {
        $resultado = Mascota::getMascotasByUsuario($_REQUEST['idUsuario']);
        foreach ($resultado as $fila) {
            $devolver['mascotas'][] = ['id' => $fila->getId(), 'nombre' => $fila->getNombre(), 'animal' => $fila->getAnimal(), 'usuario' => $fila->getUsuario()];
        }
    }

    if (count($resultado) == 0) {
        $mensaje = "SIN RESULTADOS";
        $codEstado = 404;
    } else {
        $mensaje = "SE HAN ENCONTRADO COINCIDENCIAS";
        $codEstado = 200;
    }
} else if ($metodo == 'POST') {
    if (isset($_REQUEST['nombre']) && isset($_REQUEST['animal'])) {
        $insert = new Mascota(NULL, $_REQUEST['nombre'], $_REQUEST['animal'], NULL);
        $insert->insert();
        $mensaje = "MASCOTA INSERTADA CORRECTAMENTE";
        $codEstado = 200;
    } else {
        $mensaje = "FALTA ALGÚN PARAMETRO";
        $codEstado = 400;
    }
} else if ($metodo == 'DELETE') {
    if (isset($_REQUEST['borrarPorNombre'])) {
        $insert = new Mascota(NULL, $_REQUEST['borrarPorNombre'], "", NULL);
        $insert->delete($_REQUEST['borrarPorNombre']);
        $mensaje = "MASCOTA BORRADA CORRECTAMENTE";
        $codEstado = 200;
    } else {
        $mensaje = "FALTA ALGÚN PARAMETRO";
        $codEstado = 400;
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
