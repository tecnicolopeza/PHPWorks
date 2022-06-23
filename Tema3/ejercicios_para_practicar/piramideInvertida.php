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

    $relleno = "&nbsp*&nbsp";
    $espacios = "&nbsp&nbsp";
    $tamañoBase = 20;
    for ($i = $tamañoBase; $i > 0; $i--) { //hasta que la base sea 9
        echo "<br>";
        for ($z = $i; $z < $tamañoBase; $z++) { //metemos los espacios
            echo $espacios;
        }
        for ($j = 0; $j < $i; $j++) { //pinta * segun i en ese momento
            if ($i <= 2 || $i == $tamañoBase) {
                echo $relleno;
            } else if ($j == 0 || $j == $i - 1) {
                echo $relleno;
            } else {
                echo $espacios . $espacios;
            }
        }
    }
    ?>
</body>

</html>