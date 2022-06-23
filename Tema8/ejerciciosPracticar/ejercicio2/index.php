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
    //Una función denominada obtenerSuma (tipo función, devolverá un valor numérico) que reciba una ruta de archivo
    //como parámetro, lea los números existentes en cada línea del archivo, y devuelva la suma de todos esos números.
    
    $ruta = "numeros.txt";

    if (isset($_REQUEST['suma'])) {
        function obtenerSuma($ruta)
        {
            $sumaTotal = 0;
            $fp = fopen($ruta, "r");
            while (!feof($fp)) {
                $linea = fgets($fp);
                $sumaTotal+=$linea;
            }
            fclose($fp);
            echo "La suma total es ".$sumaTotal;
        }
        obtenerSuma($ruta);
    }

    ?>
    <form action="#" method="post">
        <input type="hidden" name="suma">
        <input type="submit" value="Suma de numeros fichero">
    </form>
</body>

</html>