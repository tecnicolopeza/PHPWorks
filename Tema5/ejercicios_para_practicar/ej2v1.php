<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Maximo y Minimo</h3>

    <p>Introduce 10 numeros y mostrara el maximo y el minimo</p>
    <form action="ej2_v2.php" method="post">
    <input type="number" name="numero" id="numero" autofocus required>
    <input type="submit" value="Enviar">

    <?php
    $numero; // Variable para los numeros
    $contador = 0; // Variable para contador
    $numeroTexto = ""; // Variable auxiliar para luego serializar
    $arrayNumeros = []; 
    
    if (isset($_REQUEST['numero'])) {

        if (isset($_REQUEST['contador'])) {
            $contador = $_REQUEST['contador'];
        }

        if (isset($_REQUEST['numeroTexto'])) {
            $arrayNumeros = explode("-",$_REQUEST['numeroTexto']);
        }

        if ($contador < 10) {
            ++$contador;
            $arrayNumeros[] = $_REQUEST['numero']; //meto el numero del input en la ultima posicion del array
            $numeroTexto = implode("-",$arrayNumeros);
            echo '<input type="hidden" name="numeroTexto" value="', $numeroTexto, '">'; //envio el array en forma texto
            echo '<input type="hidden" name="contador" value="', $contador, '">'; //envio el contador
        } else {
            $contador = 0;
            $arrayNumeros = []; //vacío el array
            echo '<input type="hidden" name="contador" value="', $contador, '">';
            echo '<input type="hidden" name="numeroTexto" value="', $numeroTexto, '">'; //envio el array en forma texto
        }

    }
    ?>
</form>

<?php
print_r($arrayNumeros);
echo "<p>Contador: " . $contador . "</p>";
?>

</body>

</html>