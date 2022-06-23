<?php
$url="http://localhost/PHP_RECUPERACION_JUNIO/examen_luisa/examen-febrero/examen-febrero/servicios/servicioEscuela.php";

if (isset($_POST['filtraJugador'])) {
    $parametros = '?nombre=' . $_POST['nombre'];
    $data = file_get_contents($url . $parametros);
    echo "<h1>nombre: ". $_POST['nombre'] ."</h1>";
    echo $data;
    mostrarAlumnos(json_decode($data));
} 

else if (isset($_POST['filtraJugMarca'])) {
    $parametros = "?marca=" . $_POST['marca'] . '&top=' . $_POST['top'] ;
    $data = file_get_contents($url . $parametros);
    echo "<h1>Top \"". $_POST['top'] ."\"jugadores patrocinados por  \"". $_POST['marca'] ."\" </h1>";
    echo $data;
    mostrarAlumnos(json_decode($data));        
} 

else if (isset($_POST['filtraRankingMarcas'])) {
    $parametros = "?top=" . $_POST['top'] ;
    $data = file_get_contents($url . $parametros);
    echo "<h1>Top \"". $_POST['top'] ."\" de ranking de marcas: </h1>";
    echo $data;
    mostrarMarca(json_decode($data));        
} 





function mostrarEstado($resultado){
    echo "STATUS: ".$resultado->codEstado;
    echo "<br>".$resultado->mensaje;
    echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
}

function mostrarAlumnos($resultado){
    if ($resultado->codEstado==200) {
        print_r($resultado);

        echo "<table border='1'><tr><th>Nombre</th><th>Apellidos</th><th>Matricula</th></tr>";
        foreach ($resultado->alumnos as $alumno) {
            echo "<tr><td>".$alumno->nombre."</td>";
            echo "<td>".$alumno->apellidos."</td>";
            echo "<td>".$alumno->curso."</td></tr>";
        }
        echo "</table>";
        echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
    }else {
        mostrarEstado($resultado);
    }
}

function mostrarMarca($resultado){
    if ($resultado->codEstado==200) {
        echo "<table border='1'><tr><th>Marca</th><th>Puntos</th></tr>";
        foreach ($resultado->sumaMarcas as $sumaMarca) {
            echo "<tr><td>".$sumaMarca->marca."</td>";
            echo "<td>".$sumaMarca->suma."</td></tr>";
        }
        echo "</table>";
    }else {
        mostrarEstado($resultado);
    }
    echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
}

function hacerPeticion ($datos, $metodo, $url){
    $opciones = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => $metodo,
            "content" => http_build_query($datos) # Agregar el contenido del formulario definido anteriormente en $datos
        ],
    ];
    $contexto = stream_context_create($opciones);
    $data = file_get_contents($url, false, $contexto);
    return $data;
}