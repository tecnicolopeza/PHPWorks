<?php
$url="http://localhost/PHP_RECUPERACION_JUNIO/Tema12/carrito2/servicioEscuela.php";
if (isset($_POST['filtraProd'])) {
    $parametros = '?prod=' . $_POST['prod'] . '';
    $data = file_get_contents($url . $parametros);
    echo "<h1>Producto: ". $_POST['prod'] ."</h1>";
    mostrarProductos(json_decode($data));
    // echo $data;
}elseif (isset($_POST['filtraPrice'])) {
    $parametros = '?minPrice=' . $_POST['minPrice'] . '&maxPrice=' . $_POST['maxPrice'] .'';
    $data = file_get_contents($url . $parametros);
    echo "<h1>Productos entre: ". $_POST['minPrice'] ." & ".$_POST['maxPrice']."</h1>";
    mostrarProductos(json_decode($data));
    // echo $data;
} 


function mostrarEstado($resultado){
    echo "STATUS: ".$resultado->codEstado;
    echo "<br>".$resultado->mensaje;
    echo "<br><h4><a href='index.php'>VOLVER</a></h4>";
}

function mostrarProductos($resultado){
    if ($resultado->codEstado==200) {
        echo "<table border='1'><tr><th>Nombre</th><th>Descripcion</th><th>Precio</th></tr>";
        foreach ($resultado->productos as $producto) {
            echo "<tr><td>".$producto->nombre."</td>";
            echo "<td>".$producto->descripcion."</td>";
            echo "<td>".$producto->precio." €</td></tr>";
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