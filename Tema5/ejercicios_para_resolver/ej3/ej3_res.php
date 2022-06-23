<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina la imagen</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            margin: 0 auto;
            text-align: center;
        }

        :root{
            font-size: 62.5%;
        }

        h1{
            margin: 1rem 1rem;
        }

        table{
            border-spacing:0;
        }
        td, th {
            border: black 1px solid;
        }
        td{
            width: 4.5rem;
            height: 4.5rem;
        }
        #oculto{
            background-color: grey;
        }
        #visible{
            background-color: transparent;
        }
        .img-table{
            background-image: url("kimetsu.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <?php 

    if (isset($_REQUEST['respuesta'])) {
        $respuesta = strtolower($_REQUEST['respuesta']);
        if ($respuesta == 'tanjiro' || $respuesta == 'kamado tanjiro') {
            echo "<h1>¡Ha acertado!</h1>";
            echo "<img src='kimetsu.jpg' style='min-height: 470px; width: 470px;'>";
            echo "<h2>Es Kamado Tanjiro de Kimetsu No Yaiba</h2>";
        }else{
            echo "<h1>¡Ha fallado!</h1>";
            echo "<button onclick='window.history.back()'>VOLVER ATRÁS</button>";
            echo "<a href=".$_SERVER['HTTP_REFERER'].">Atras</a>";
        }
    }else{
        echo "<h1 style='color: red;'>Ha llegado al máximo de intentos</h1>";
        if (isset($_REQUEST['tabla'])) {
            $tabla=unserialize($_REQUEST['tabla']);//recupera el array
            $intentos = $_REQUEST['intentos'];
        }

        echo "<h3>Intentos = ".$intentos."</h3>";

        $n=0;
        echo "<table class='img-table'>";
        for ($i=0; $i < 10; $i++) { 
            echo "<tr>";
            for ($j=0; $j < 10; $j++) {
                echo "<td id=".$tabla[$n].">
                </td>";
                $n++;
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <form action="ej3_res.php" method="post" style="margin-top: 1rem;">
        <label for="respuesta" style="font-size: 1.5rem;">¿Qué personaje de anime es?</label>
        <input type="text" name="respuesta" id="respuesta">
        <input type="submit" value="Enviar respuesta">
    </form>
    <?php  
    }
    ?>
</body>
</html>