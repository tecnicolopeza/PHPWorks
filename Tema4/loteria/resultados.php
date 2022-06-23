<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            margin: 0 auto;
            text-align: center;
        }

        table {
            margin-top: 2rem;
            width: 500px;
        }

        h1 {
            margin-top: 2rem;
        }
    </style>
</head>

<body>

    <div class="contCentrado">

        <h1>Los numeros acertados estarán en verde</h1>

        <?php
        if (isset($_REQUEST['serie'])) {
            $serie = $_REQUEST['serie'];
            $serieR = rand(1, 999);
            $n1 = rand(1, 49);
            $n2 = rand(1, 49);
            $n3 = rand(1, 49);
            $n4 = rand(1, 49);
            $n5 = rand(1, 49);
            $n6 = rand(1, 49);
            
            //----pruebas----
            // $n1 = 17;
            // $n2 = 2;
            // $n3 = 3;
            // $n4 = 24;
            // $n5 = 5;
            // $n6 = 30;
            // $serieR = 78;
        }


        ?>


        <table border="1">
            <tr>
                <td colspan="6" style="background-color: dodgerblue; color: white;">Numeros ganadores</td>
            </tr>
            <tr>
                <th><?= $n1 ?></th>
                <th><?= $n2 ?></th>
                <th><?= $n3 ?></th>
                <th><?= $n4 ?></th>
                <th><?= $n5 ?></th>
                <th><?= $n6 ?></th>
            </tr>
            <tr>
                <td colspan="6" style="background-color: dodgerblue; color: white;">Numero de serie</td>
            </tr>
            <tr>
                <td colspan="6"><?= $serieR ?></td>
            </tr>
        </table>

        <table border="1">
            <tr>
                <td colspan="6" style="background-color: dodgerblue; color: white;">Numeros elegidos</td>
            </tr>
            <tr>
                <?php
                $contador = 0;
                $aciertos = 0;
                for ($j = 1; $j <= 49; $j++) {
                    if (isset($_REQUEST[$j])) {
                        $contador = $j;
                        if ($contador == $n1 || $contador == $n2 || $contador == $n3 || $contador == $n4 || $contador == $n5 || $contador == $n6) {
                            echo "<th style='background-color:green; color: white;'>" . $contador . "</th>";
                            $aciertos++;
                        } else {
                            echo "<th>" . $contador . "</th>";
                        }
                        $contador++;
                    }
                }
                echo "<tr><td colspan='6' style='background-color: dodgerblue; color: white;'>Numero de serie</td></tr>";
                echo "<tr><td colspan='6'>$serie</td></tr>";
                ?>
            </tr>
        </table>

        <?php
        $dinero = 0;
        if ($aciertos < 4) {
            echo "<h2>$aciertos aciertos, no ganaste nada uwu</h2>";
        } elseif ($aciertos == 4) {
            echo "<h2>$aciertos aciertos, tienes dinero vuelto uwu</h2>";
        } elseif ($aciertos == 5) {
            echo "<h2>¡$aciertos aciertos, sumas 30€! uwu</h2>";
            $dinero = 30;
        } elseif ($aciertos == 6) {
            echo "<h2>¡$aciertos aciertos, sumas 100€! uwu</h2>";
            $dinero = 100;
        }

        if ($serie == $serieR) {
            $dinero = $dinero+500;
            echo "<h3 style='color:dodgerblue; '>¡Has acertado el numero de serie! ¡Sumas 500€!</h3>";
        }
        
        ?>
        
        <h2 style="color: green;">Dinero ganado <?= $dinero ?>€</h2>
    </div>
</body>

</html>