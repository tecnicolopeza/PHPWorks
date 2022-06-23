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
        if(!isset($_SESSION['numeros'])){
            $_SESSION['numeros'] = 0;
        }
        if(isset($_REQUEST['numero'])){
            if ($_REQUEST['numero']<0) {
                if ($_SESSION['contador']==0) {
                    echo "¡No se puede hacer una división entre 0!";
                }else{
                    $media = $_SESSION['numeros']/$_SESSION['contador'];
                }
            }else{
                $_SESSION['numeros']+=$_REQUEST['numero'];
                $_SESSION['contador']++;
            }

        }
    ?>
    <h2>Ejercicio 1
        Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A
        priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir
        los datos cuando meta un número negativo. Utiliza sesiones.
    </h2>
    
    <?php 
        echo "Números introducidos: ".$_SESSION['contador']."<br>";
        echo "Suma números: ".$_SESSION['numeros'];
    ?>
    <form action="#" method="post">
        <label for="numero">Numero: </label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Añadir">
    </form>

    <?php 
        if (isset($media)) {
            echo "La media es ".$media;
            session_destroy(); //destruye la sesion
        }
    ?>
</body>
</html>