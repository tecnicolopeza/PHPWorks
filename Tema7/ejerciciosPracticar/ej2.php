<?php if ( session_status() == PHP_SESSION_NONE) { session_start(); }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        if(!isset($_SESSION['contador'])){
            $_SESSION['contador']=0;
        }
        if(!isset($_SESSION['numerosImpares'])){
            $_SESSION['numerosImpares'] = 0;
            $_SESSION['contadorImpares'] = 0;
        }
        if(isset($_REQUEST['numero'])){
            if ($_REQUEST['numero']<0) {
                if ($_SESSION['contador']==0) {
                    echo "¡No se puede hacer una división entre 0!";
                }else{
                    $media = $_SESSION['numerosImpares']/$_SESSION['contadorImpares'];
                }
            }else{
                if($_REQUEST['numero']%2!=0){
                    $_SESSION['numerosImpares']+=$_REQUEST['numero'];
                    $_SESSION['contadorImpares']++;
                }
                $_SESSION['contador']++;
            }

        }
    ?>
    <h2>Ejercicio 2
        Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga
        cuantos números se han introducido, la media de los impares y el mayor de los pares. El número negativo sólo
        se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo. Utiliza sesiones.
    </h2>
    
    <?php 
        echo "Números introducidos: ".$_SESSION['contador']."<br>";
        echo "Números impares introducidos: ".$_SESSION['contadorImpares']."<br>";
        echo "Suma números impares: ".$_SESSION['numerosImpares'];
    ?>
    <form action="#" method="post">
        <label for="numero">Numero: </label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Añadir">
    </form>

    <?php 
        if (isset($media)) {
            echo "La media es de los impares es ".$media;
            session_destroy(); //destruye la sesion
        }
    ?>
</body>
</html>