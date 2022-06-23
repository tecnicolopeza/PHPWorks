<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (isset($_COOKIE['user'])) {
        $_SESSION['user'] = $_COOKIE['user'];
        $_SESSION['id'] = $_COOKIE['id'];
    }
}

?>