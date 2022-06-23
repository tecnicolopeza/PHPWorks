<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-decoration: none;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .divLoteria {
            margin: 0 auto;
            width: 50%;
            text-align: center;
            background-color: navajowhite;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .divLoteria h3{
            margin: 1.5em 0 0.2em 0;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        form input{
            width: 20%;
        }

        .enviar{
            width: 15%;
            padding: 0.5em;
            border-radius: 0.5em;
            font-weight: bold;
        }

        .enviar:hover{
            background-color: seagreen;
            color: white;
        }
    </style>
</head>

<body>
    <div class="divLoteria">
        <h1>Loteria</h1>
        <form action="resultados.php" method="post">
            <h3>Numeros a elegir entre 1-49</h3>
            <input type="number" name="n1" id="n1" min="1" max="49" autofocus>
            <input type="number" name="n2" id="n2" min="1" max="49">
            <input type="number" name="n3" id="n3" min="1" max="49">
            <input type="number" name="n4" id="n4" min="1" max="49">
            <input type="number" name="n5" id="n5" min="1" max="49">
            <input type="number" name="n6" id="n6" min="1" max="49">
            <br>
            <h3>Numero de serie </h3>
            <input type="number" name="nSerie" id="nSerie" min="1" max="999">
            <input class="enviar" type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>