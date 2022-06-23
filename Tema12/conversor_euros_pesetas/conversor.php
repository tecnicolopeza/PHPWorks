<?php

//hacerlo con 4 variables codigo, mensaje, resultado, moneda pasarlo a array asociativo y hacerle json_encode

if (isset($_REQUEST['moneda'])) {
    $moneda = $_REQUEST['moneda'];
    $cantidad = $_REQUEST['cantidad'];

    //codigo = 0 -> OK | codigo = 1 -> dinero negativo
    $codigo = 0;
    $mensaje = "";
    $resultado = 0;

    //pasar euros a pesetas
    if ($moneda == 'euros' && !empty($moneda) && $cantidad >= 0) {
        $pesetas = $cantidad * 166.386;
        $codigo = 0;
        $mensaje = "Conversión euros a pesetas conseguida";
        $resultado = $pesetas . " pts";
    } else if ($cantidad < 0) {
        $codigo = 1;
        $mensaje = "Dinero introducido negativo";
        $resultado = "NuN";
    }

    //pasar pesetas a euros
    if ($moneda == 'pesetas' && !empty($moneda) && $cantidad >= 0) {
        $euros = round($cantidad/166.386, 3);
        $codigo = 0;
        $mensaje = "Conversión pesetas a euros conseguida";
        $resultado = $euros . " €";
    } else if ($cantidad < 0) {
        $codigo = 1;
        $mensaje = "Dinero introducido negativo";
        $resultado = "NuN";
    }

    $json_response = json_encode(["codigo" => $codigo, "moneda" => $moneda, "mensaje" => $mensaje, "resultado" => $resultado]);
    echo $json_response;
}
