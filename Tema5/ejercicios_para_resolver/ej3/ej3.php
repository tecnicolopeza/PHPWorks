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
    <h1 style="color: green;">Adivina la imagen oculta</h1>
    <?php 
        //Hecho con tabla background-img y celdas con visible o gris
        //Tabla 10x10
        //Limite de intentos
        //Resultado en otra página
        //Almacenar en un array la situación de cada celda (vista u oculta) 
        //y pasar el array con la función serialize para mayor comodidad.

        $intentos = 0;
        if (isset($_REQUEST['tabla'])) {
            $tabla=unserialize($_REQUEST['tabla']);//recupera el array
            $intentos = $_REQUEST['intentos'];
            if ($intentos<=9) {
                if (isset($_REQUEST['pos'])) {
                    //si esta visible poner oculta y viceversa
                    if ($tabla[$_REQUEST['pos']]=="visible") {
                        $tabla[$_REQUEST['pos']]='oculto';
                    }else{
                        ++$intentos;
                        $tabla[$_REQUEST['pos']]='visible';
                    }
                }
            }else{
                $url = 'ej3_res.php';
                header('Location: '.$url.'?intentos='.$intentos.'&tabla='.serialize($tabla));
            }
            
        }else{
            $tabla=array_fill(0, 100, 'oculto'); //mete 'oculto' en las posiciones del array de 0 a 100
        }

        echo "<h3>Intentos = ".$intentos."</h3>";
        // var_dump($tabla);
        $n=0;
        echo "<table class='img-table'>";
        for ($i=0; $i < 10; $i++) { 
            echo "<tr>";
            for ($j=0; $j < 10; $j++) {

                //Si quiero que no tenga enlace al haber hecho click ya
                // if ($tabla[$n]=='visible') { 
                //     echo "<td id=".$tabla[$n]."></td>";
                // }else{}
                echo "<td id=".$tabla[$n].">
                    <a href='ej3.php?pos=".$n."&intentos=".$intentos."&tabla=".serialize($tabla)."' style='width:100%; height: 100%; display:block'></a>
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
</body>
</html>