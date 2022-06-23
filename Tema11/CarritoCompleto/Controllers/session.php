<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (isset($_COOKIE['nick'])) {
        $_SESSION['user']['nick'] = $_COOKIE['nick'];
        $_SESSION['user']['type'] = $_COOKIE['type'];
        $_SESSION['user']['id'] = $_COOKIE['id'];
    }
}

?>