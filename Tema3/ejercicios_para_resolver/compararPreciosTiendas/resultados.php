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
            font-size: 20px;
            font-family: sans-serif;
        }

        body {
            padding-top: 20%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .tftable {
            margin: 0 auto;
            color: #333333;
            width: 40%;
            border-width: 1px;
            border-color: #729ea5;
            border-collapse: collapse;
            text-align: center;
        }

        .tftable th {
            background-color: #acc8cc;
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #729ea5;
            text-align: center;
        }

        .tftable tr {
            background-color: #ffffff;
        }

        .tftable td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #729ea5;
        }

        .tftable tr:hover {
            background-color: #ffff99;
        }

        .tftable tr:nth-child(3) td:last-child{
            background-color: #acc8cc;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php
    if (isset($_REQUEST['tienda1'])) {
        $tienda1 = $_REQUEST['tienda1'];
        $tienda2 = $_REQUEST['tienda2'];
        $tienda3 = $_REQUEST['tienda3'];

        $media = ($tienda1+$tienda2+$tienda3)/3;
    }
    ?>

    <h1>COMPARACIÓN TIENDAS</h1>

    <table class="tftable" border="1">
        <tr>
            <th>Tienda 1</th>
            <th>Tienda 2</th>
            <th>Tienda 3</th>
            <th>Media</th>
        </tr>
        <tr>
            <td><?= $tienda1 ?></td>
            <td><?= $tienda2 ?></td>
            <td><?= $tienda3 ?></td>
            <td><?= round($media,2) ?></td>
        </tr>
        <tr>
            <td><?= round($tienda1 - $media,2) ?> </td>
            <td><?= round($tienda2 - $media,2) ?> </td>
            <td><?= round($tienda3 - $media,2) ?> </td>
            <td class="diferencia">Diferencia</td>
        </tr>
    </table>
</body>

</html>