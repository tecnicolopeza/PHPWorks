<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo subido</title>

    <style type="text/css">
        * {
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif
        }

        .main {
            margin: auto;
            border: 1px solid #7C7A7A;
            width: 50%;
            text-align: left;
            padding: 30px;
            background: #85c587
        }

        input[type=submit] {
            background: #6ca16e;
            width: 100%;
            padding: 5px 15px;
            background: #ccc;
            cursor: pointer;
            font-size: 16px;

        }

        table td {
            padding: 5px;
        }
    </style>
</head>

<body bgcolor="#bed7c0">

    <div class="main">
        <h1>Subir archivo con PHP:</h1>
        <?php
        $directorio = 'archivos/';

        $subir_archivo = $directorio . basename($_FILES['subir_archivo']['name']);
        echo "<div>";
        if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
            echo "El archivo es válido y se cargó correctamente.<br><br>";
            // echo "<a href='" . $subir_archivo . "' target='_blank'><img src='" . $subir_archivo . "' width='150'></a>";
        } else {
            echo "La subida ha fallado";
        }
        echo "</div>";

        $ruta = $subir_archivo; //nombre del archivo

        if (isset($_REQUEST['archivo'])) {
            function obtenerSuma($ruta)
            {
                $sumaTotal = 0;
                $fp = fopen($ruta, "r");
                while (!feof($fp)) {
                    $linea = fgets($fp);
                    $sumaTotal += $linea;
                }
                fclose($fp);
                echo "La suma total de los numeros en el documento es " . $sumaTotal;
            }
            obtenerSuma($ruta);
        }

        ?>
        <br>
        <div style="border:1px solid #000000; text-transform:uppercase">
            <h3 align="center">
                <div align="center"><a href="cargar.php">Volver</a></div>
            </h3>
        </div>

        <?php

        ?>

    </div>

</body>

</html>