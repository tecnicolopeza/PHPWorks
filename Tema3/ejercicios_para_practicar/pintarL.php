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
    $tamano = 10;
    for ($i = 0; $i < $tamano; $i++) {
        echo "<br>";
        if ($i == $tamano-1) {
            for ($j = 0; $j < $tamano / 2; $j++) {
                echo $relleno;
            }
        } else {
            echo $relleno;
        }
    }
    ?>
</body>

</html>