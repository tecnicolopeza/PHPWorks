<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
        traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta <\table> de HTML.</p>

    <?php
    //declaramos el array asociativo
    $traductor = ["arbol" => "tree", "mesa" => "table", "lobo" => "wolf", "cielo" => "sky", "amor" => "love"];
    ?>

    <table border="2" style="text-align: center;">
        <tr>
            <td style="visibility: hidden;"></td>
            <td>Español</td>
            <td>Ingles</td>
        </tr>
        <?php
        
        foreach ($traductor as $espanol => $ingles){
            echo "<tr><td>Traduccion</td><td>".$espanol."</td><td>".$ingles."</td></tr>";
        }
        ?>
        
    </table>
</body>

</html>