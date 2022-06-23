<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    // if (isset($_SESSION['user'])) {
    //     header('location: ../Controller/index.php');
    // } else {
    //     if (isset($_COOKIE['user'])) {
    //         $_SESSION['user'] = $_COOKIE['user'];
    //         $_SESSION['perfil'] = $_COOKIE['perfil'];
    //         header('location: ../Controller/index.php');
    //     }
    // }
}
