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
        }

        h1 {
            margin-top: 2rem;
        }

        body {
            margin: 0 auto;
            width: 60%;
            height: auto;
        }

    </style>
</head>

<body>
    <h1 style="text-align: center;">Página comida rápida</h1>

    <?php
    if (isset($_REQUEST['fin'])) {
        echo "<h1>Pedido: </h1><br>";
        $pedido = unserialize(base64_decode($_REQUEST['pedido']));
        foreach ($pedido as $comida) {
            echo $comida[0] . " - Ingredientes: ";
            for ($i = 1; $i < count($comida); $i++) {
                if ($i==count($comida)-1) {
                    echo $comida[$i] . ".";
                }else{
                    echo $comida[$i] . ", ";
                }
            }
            echo "<br><br>";
            echo "<hr>";
            echo "<br>";
        }
        
    } else {
        if (!isset($_REQUEST['comida'])) {
            $pedido = [];
        } else {
            $pedido = unserialize(base64_decode($_REQUEST['pedido']));
            $pedido[] = $_REQUEST['comida']; //aquí mete el array comida en el array pedido
        }
    ?>
        <h3>Patatas gratinadas</h3>
        <form action="ej2.php" method="post">
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <input type="hidden" name="comida[]" value="Patatas">
            <input type="checkbox" name="comida[]" value="Jamon">Jamon<br>
            <input type="checkbox" name="comida[]" value="Bacon">Bacon<br>
            <input type="checkbox" name="comida[]" value="Queso">Queso<br>
            <input type="submit" value="Añadir al pedido">
        </form>
        <hr>
        <h3>Pizza</h3>
        <form action="ej2.php" method="post">
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <input type="hidden" name="comida[]" value="Pizza">
            <input type="checkbox" name="comida[]" value="Jamon york">Jamon york<br>
            <input type="checkbox" name="comida[]" value="Bacon">Bacon<br>
            <input type="checkbox" name="comida[]" value="Queso">Queso<br>
            <input type="checkbox" name="comida[]" value="Salsa Barbacoa">Salsa barbacoa<br>
            <input type="submit" value="Añadir al pedido">
        </form>
        <hr>
        <h3>Hamburguesa</h3>
        <form action="ej2.php" method="post">
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <input type="hidden" name="comida[]" value="Hamburguesa">
            <input type="checkbox" name="comida[]" value="Jamon york">Jamon york<br>
            <input type="checkbox" name="comida[]" value="Bacon">Bacon<br>
            <input type="checkbox" name="comida[]" value="Queso">Queso<br>
            <input type="checkbox" name="comida[]" value="Doble carne">Doble carne<br>
            <input type="checkbox" name="comida[]" value="Salsa Barbacoa">Salsa barbacoa<br>
            <input type="submit" value="Añadir al pedido">
        </form>
        <form action="ej2.php" method="post">
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <input type="submit" name="fin" value="FINALIZAR PEDIDO">
        </form>
    <?php
    }
    ?>
</body>

</html>