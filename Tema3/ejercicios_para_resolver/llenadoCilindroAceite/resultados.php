<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* { */
            /* color: white; */
        /* } */

        .divCilindros {
            font-family: sans-serif;
            text-align: center;
            margin: 0 auto;
            border-radius: 1em;
            width: 30%;
            height: 70vh;
            background-color: peachpuff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 2em;
        }

        form {
            font-weight: bold;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
        }

        .boton {
            background-color: cornflowerblue;
            color: white;
            padding: 0.5em;
            border-radius: 0.5em;
            font-weight: bold;
        }

        .boton:hover {
            cursor: pointer;
            background-color: green;
        }
    </style>
</head>

<body>

    <?php
    if (isset($_REQUEST['diametro'])) {
        $diametro = $_REQUEST['diametro'];
        $altura = $_REQUEST['altura'];
        $caudal = $_REQUEST['caudal'];
        //tiempo llenado  t=V/Q 
        //volumen v = PI * h * diametro
        $volumen = M_PI * $altura * pow($diametro/2,2);
        $tiempo = $volumen/$caudal;
        $tiempoH = intval(round($tiempo/60,2));
        $tiempoM = intval($tiempo - $tiempoH * 60);
    }
    ?>
    <div class="divCilindros">
        <h2>Tiempo transcurrido para el llenado</h2>
        <h3>Tardará en llenarse <?= $tiempoH ?> horas y <?= $tiempoM ?> minutos <br>en rellenarse.</h3>
    </div>
</body>

</html>