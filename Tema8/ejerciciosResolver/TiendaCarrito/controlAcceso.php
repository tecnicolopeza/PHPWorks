<?php 

    if (!isset($_SESSION['usuario'])) {
        echo "No estas logueado, redirigiendo al login...";
        header( "refresh:2;url=login.php" );
        exit();
    }

?>