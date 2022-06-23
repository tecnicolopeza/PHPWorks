<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //numero
    for ($i = 0; $i < 20; $i++) {
        $numero[$i] = rand(0, 100);
    }

    //cuadrado
    foreach ($numero as $elemento) {
        $cuadrado[] = $elemento * $elemento;
    }

    //cuadrado
    foreach ($numero as $elemento) {
        $cubo[] = $elemento * $elemento * $elemento;
    }

    echo "NUMERO<br>";
    print_r($numero);
    echo "<br><br>CUADRADO<br>";
    print_r($cuadrado);
    echo "<br><br>CUBO<br>";
    print_r($cubo);

    ?>
</body>

</html>