<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .divFormulario{
            margin: 0 auto;
            width: 500px;
            height: 300px;
            background-color: cadetblue;
            color: white;
            font-weight: bold;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        .formulario{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }

        .formulario label{
            margin-top: 1rem;
        }
        
        .enviar{
            font-weight: bold;
            margin-top: 1rem;
            width: 50%;
            border-radius: 5px;
        }

        .enviar:hover{
            cursor: pointer;
            background-color: cornflowerblue;
            color: white;
        }
    </style>
</head>

<body>
    <div class="divFormulario">
        <form action="resultados.php" method="post" class="formulario">
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura" step="0.01">
            <label for="diametro">Diametro:</label>
            <input type="number" name="diametro" id="diametro" step="0.01">
            <input type="submit" class="enviar" value="Enviar">
        </form>
    </div>
</body>

</html>