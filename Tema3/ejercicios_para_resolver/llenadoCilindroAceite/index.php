<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=es, initial-scale=1.0">
    <title>Document</title>
    <style>

        h2{
            color: white;
        }

        .divCilindros{
            font-family: sans-serif;
            text-align: center;
            margin: 0 auto;
            border-radius: 1em;
            width: 30%;
            height: 70vh;
            background-color: peachpuff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 2em;
        }

        form{
            font-weight: bold;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
        }

        .boton{
            background-color: cornflowerblue;
            color: white;
            padding: 0.5em;
            border-radius: 0.5em;
            font-weight: bold;
        }

        .boton:hover{
            cursor: pointer;
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="divCilindros">
        <h2>Cilindro de llenado de aceite</h2>
        <form action="resultados.php" method="post">
            <label for="diametro">Diametro:</label>
            <input type="number" name="diametro" id="diametro">
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura">
            <label for="caudal">Caudal: (litros por minuto)</label>
            <input type="number" name="caudal" id="caudal">
            <input type="submit" value="CALCULAR" class="boton">
        </form>
    </div>
</body>
</html>