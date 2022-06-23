<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('Menu.php');

#Si ya exite la sesion recuperamos el objeto
if (isset($_SESSION['menu'])){ 
    $menu=unserialize($_SESSION['menu']); 
}else{
    $menu = new Menu();#creo el objeto
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo" required>
        <label for="enlace">Enlace: </label>
        <input type="text" name="enlace" id="enlace" required>
        <input type="submit" value="Añadir">
    </form>
    <br>
    <form action="#" method="post">
        <input type="hidden" name="vertical">
        <input type="submit" value="Mostrar menu vertical">
    </form>
    <br>
    <form action="#" method="post">
        <input type="hidden" name="horizontal">
        <input type="submit" value="Mostrar menu horizontal">
    </form>
    <br>
    <?php 
        if (isset($_REQUEST['titulo'])){
            $menu->aniadirElementos($_REQUEST['titulo'], $_REQUEST['enlace']);
            $_SESSION['menu'] = serialize($menu); #serializo el objeto
            // var_dump($menu);
    }
        if (isset($_REQUEST['vertical'])) {
            echo $menu->mostrarVerticalMenu();
        }elseif (isset($_REQUEST['horizontal'])) {
            echo $menu->mostrarHorizontalMenu();
        }

    ?>

</body>
</html>