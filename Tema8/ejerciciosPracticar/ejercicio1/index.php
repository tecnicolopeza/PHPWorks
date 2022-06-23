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
    /*
        Una función (tipo procedimiento, no hay valor devuelto) denominada escribirTresNumeros que reciba tres números
        enteros como parámetros y proceda a escribir dichos números en tres líneas en un archivo denominado
        datosEjercicio.txt. Si el archivo no existe, debe crearlo.
        */

    if (isset($_REQUEST['n1'])) {
        escribirTresNumeros($_REQUEST['n1'],$_REQUEST['n2'], $_REQUEST['n3']); #llamada a la función
    }
    function escribirTresNumeros($n1, $n2, $n3)
    {
        //abre o crea el fichero sino existe
        $fp = fopen("datosEjercicio.txt", "w");
        fputs($fp, $n1 . PHP_EOL);
        fputs($fp, $n2 . PHP_EOL);
        fputs($fp, $n3 . PHP_EOL);
        //cierra el fichero
        fclose($fp);
    }
    ?>
    <form action="#" method="post">
        <label for="n1">Numero 1</label>
        <input type="number" name="n1" id="n1" required>
        <label for="n1">Numero 2</label>
        <input type="number" name="n2" id="n2" required>
        <label for="n1">Numero 3</label>
        <input type="number" name="n3" id="n3" required>
        <input type="submit" value="Escribir en fichero">
    </form>
</body>

</html>