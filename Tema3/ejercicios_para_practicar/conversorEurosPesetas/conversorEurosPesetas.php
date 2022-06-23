<!DOCTYPE html>
<html lang="es">

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

        body{
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .convertir {
            margin: 0 auto;
            background-color: blanchedalmond;
            font-weight: bold;
            font-family: sans-serif;
            width: 500px;
            height: 350px;
            text-align: center;
            border-radius: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 2rem;
        }

        .btn{
            background-color: aquamarine;
            font-weight: bold;
            padding: 0.5em 1em 0.5em 1em;
            margin: 1em;
            border-radius: 0.5em;
            transition: 1s;
            transform: scale(1);
        }

        .btn:hover{
            background-color: lawngreen;
            cursor: pointer;
            transform: scale(1.2);
        }
        
        .euros {
            padding: 0.5rem;
            border-radius: 0.2em;
        }
    </style>
</head>

<body>

    <div class="convertir">
        <h1>Conversor euros a pesetas</h1>
        <form action="resultados.php" method="post">
            <input type="number" name="euros" class="euros" id="euros" autofocus><br>
            <input class="btn" type="submit" value="calcular">
        </form>
    </div>
</body>

</html>