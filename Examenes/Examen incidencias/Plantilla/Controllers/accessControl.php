<?php 
    if (!isset($_SESSION['user'])) {
        echo "No estas logueado, redirigiendo al login...";
        header("refresh:1;url=login.php" );
        exit();
    }
?>