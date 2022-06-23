<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            width: 100%;
            height: 50vh;
        }

        .table {
            text-align: center;
            width: 20%;
        }

        h1 {
            margin: 0 auto;
            text-align: center;
            margin: 4rem 0 4rem 0;
        }

        .divResultados{
            display: flex;
            width: 100vw;
            justify-content: center;
            gap: 2rem;
        }
    </style>
</head>

<body>


    <h1>RESULTADOS TOMBOLA</h1>

    <div class="divResultados">
        <?php
        if (isset($_REQUEST['n1'])) {
            $nSerie = $_REQUEST['nSerie'];
        ?>
            <table class="table table-bordered">
                <tr class="success">
                    <td>Numeros elegidos</td>
                </tr>
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    ${"n" . $i} = $_REQUEST['n' . $i]; //${"var".incremento} para generar dinamicamente variables
                    echo "<tr><td> ${"n" .$i} </td>";
                }
                ?>
                </tr>
                <td class="success">Numero de serie</td>
                <tr>
                    <td><?= $nSerie ?></td>

                </tr>

            </table>
        <?php
        }

        //Generar resultado de tombola aleatorio
        $nSerieR = rand(1, 999);
        ?>
        <table class="table table-bordered">
            <tr class="success">
                <td>Numeros premiados</td>
            </tr>
            <?php
            for ($i = 1; $i <= 6; $i++) {
                $nR = rand(1, 49);
                echo "<tr><td> $nR </td>";
            }
            ?>
            </tr>
            <td class="success">Numero de serie premiado</td>
            <tr>
                <td><?= $nSerieR ?></td>

            </tr>

        </table>
    </div>
</body>

</html>