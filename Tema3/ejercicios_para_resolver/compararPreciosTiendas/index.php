<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .divPrecios{
            position: absolute;
            left: 35%;
            top: 15%;
            margin: 0 auto;
            width: 500px;
            border-radius: 1em;
            background-color: skyblue;
            height: 500px;
            font-family: sans-serif;
            color: white;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 2rem;
        }
        input{
            display: block;
            margin: 0 0 2rem 0;
        }

        .formulario{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .boton{
            background-color: salmon;
            color: white;
            padding: 1em;
            border-radius: 0.5em;
            font-weight: bold;
        }

        .boton:hover{
            cursor: pointer;
            background-color: seagreen;
        }
    </style>
</head>
<body>
    <div class="divPrecios">
        <h2>Precios:</h2>
        <form action="resultados.php" method="post" class="formulario">
            <label for="tienda1">Tienda 1:</label>
            <input type="number" name="tienda1" id="tienda1" autofocus required>
            <label for="tienda2">Tienda 2:</label>
            <input type="number" name="tienda2" id="tienda2" required>
            <label for="tienda3">Tienda 3:</label>
            <input type="number" name="tienda3" id="tienda3" required>
            <input class="boton" type="submit" value="COMPARAR">
        </form>
    </div>
</body>
</html>