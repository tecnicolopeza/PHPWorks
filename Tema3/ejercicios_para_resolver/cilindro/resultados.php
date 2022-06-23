<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .divResultados {
            text-align: center;
            margin: 0 auto;
            width: 50%;
            height: 95vh;
            background-color: cadetblue;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <?php
        if (isset($_REQUEST['altura'])) {
            $h = $_REQUEST['altura'];
            $diametro = $_REQUEST['diametro'];
            $volumen = (M_PI*$diametro)*$h;
        }
    ?>

    <div class="divResultados">
        <h1>Calculo de volumen de un cilindro</h1>
        <img src="cilindro.png" alt="cilindro" style="width: 200px; height: 300px">
        <h2>El volumen del cilindro con h = <?= $h ?> y diametro = <?= $diametro ?><br>es <?= $volumen ?></h2>
    </div>
</body>

</html>