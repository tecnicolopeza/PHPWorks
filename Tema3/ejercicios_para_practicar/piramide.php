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
        for ($i=0; $i < 10; $i++) {//hasta que la base sea 9
            echo "<br>";
            for ($z=9; $z > $i; $z--) { //metemos los espacios
                echo $espacios;
            }
            for ($j=0; $j < $i; $j++) {//pinta * segun i en ese momento
                echo $relleno;
            }
        }

    ?>
</body>
</html>