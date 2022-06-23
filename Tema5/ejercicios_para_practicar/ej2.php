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
        
        <form action="ej2.php" method="post">
            <input type="number" name="numero" placeholder="0" autofocus checked>
            <input type="submit" id="enviar" name="submit" value="¡Enviar!">
            
            <?php
            $numero; // Variable para los numeros
            $contador = 0; // Variable para contador
            $numeroTexto = ""; // Variable auxiliar para luego explotar un array

            if (isset($_POST['numero'])) {

                // La primera vez que se envia el formulario
                // Recogemos los datos
                $numero = $_POST['numero'];

                // Comprobacion si nos envian un formulario vacio
                if ($numero == "") {
                    // Sustituimos el formulario vacio por un 0.
                    $numero = 0;
                }

                // Asignamos la variable a numeroTexto
                if (isset($_POST['numeroTexto'])) {
                    $numeroTexto = $_POST['numeroTexto'];
                }
                // Añadimos el numero al String para luego explotarlo
                $numeroTexto .= $numero;
                $numeroTexto .= " ";

                // Recogemos el valor del contador 
                if (isset($_POST['contador'])) {
                    $contador = $_POST['contador'];
                }
                // Incrementamos la variable contador
                $contador++;

                // Enviamos los datos como hidden
                echo '<input type="hidden" name="numeroTexto" value="', $numeroTexto ,'">';
                echo '<input type="hidden" name="contador" value="', $contador ,'">';
            }
            ?>
        </form>
        
        <?php
        // Salimos del formulario
        // Si contador resulta ser 10 o mayor
        if ($contador >= 10) {
            
            // Desactivamos el boton submit
            echo '<script>document.getElementById("enviar").disabled=true</script>';
            // Añadimos el boton recargar con JavaScript
            echo '<button onclick ="document.location.href = document.location.href;">Recargar</button><br>';

            $numeroTexto = substr($numeroTexto, 0, -1);

            // Explotamos el String para pasarlo a Array
            $numero = explode(" ", $numeroTexto);

            // Metemos en una variable la longitud del array
            $arrayLength = count($numero);

            // Con max coneguimos sacar directamente el numero maximo del array $numero
            $maximo = max($numero);
            // Con min coneguimos sacar directamente el numero maximo del array $numero
            $minimo = min($numero);
            
            // Pintamos el array
            for ($i = 0; $i < $arrayLength; $i++) {
                if($numero[$i] == $maximo) {
                    // Si el numero del array coincide con el maximo lo pintamos
                    echo $numero[$i], " Maximo <br>";
                } else if ($numero[$i] == $minimo) {
                    // Si el numero del array coincide con el minimo lo pintamos
                    echo $numero[$i], " Minimo <br>";
                } else {
                    // Pintamos el resto de los numeros del array
                    echo $numero[$i], "<br>";
                }
            } // Fin del for
        } // Fin del If

        ?>
</body>
</html>