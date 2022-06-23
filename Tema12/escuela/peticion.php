<?php
$url="http://localhost/PHP_RECUPERACION_JUNIO/Tema12/escuela/servicioEscuela.php";
if (isset($_POST['filtraPorCurso'])) {
    $parametros = '?cursos=' . $_POST['cursos'] . '';
    $data = file_get_contents($url . $parametros);
    echo "<h1>Alumnos: ". $_POST['cursos'] ."</h1>";
    mostrarAlumnos(json_decode($data));
    // echo $data;
}elseif(isset($_POST['filtrarNombreAlumno'])){
    $parametros = '?nombreAlumno=' . $_POST['nombreAlumno'] . '';
    $data = file_get_contents($url . $parametros);
    echo "<h1>Alumnos: ". $_POST['nombreAlumno'] ."</h1>";
    mostrarAlumnos(json_decode($data));
    // echo $data;
}elseif(isset($_POST['filtraAsignatura'])){
    $parametros = '?matricula=' . $_POST['matricula'] . '';
    $data = file_get_contents($url . $parametros);
    echo "<h1>Alumno con matricula: ". $_POST['matricula'] ."</h1>";
    mostrarAlumnos(json_decode($data));
    echo $data;
}

function mostrarEstado($resultado){
    echo "STATUS: ".$resultado->codEstado;
    echo "<br>".$resultado->mensaje;
    echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
}

function mostrarAlumnos($resultado){
    if ($resultado->codEstado==200) {
        echo "<table border='1'><tr><th>Matricula</th><th>Nombre</th><th>Apellidos</th><th>Curso</th></tr>";
        foreach ($resultado->alumnos as $alumno) {
            echo "<tr><td>".$alumno->matricula."</td>";
            echo "<td>".$alumno->nombre."</td>";
            echo "<td>".$alumno->apellidos."</td>";
            echo "<td>".$alumno->curso."</td></tr>";
        }
        echo "</table>";
        echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
    } else {
        mostrarEstado($resultado);
    }
}


function hacerPeticion($datos, $metodo, $url){
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