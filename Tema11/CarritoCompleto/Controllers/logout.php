<?php
    session_start();
    include_once('unsetCookies.php');
    session_destroy();
    unsetCookies();
    header('Location: login.php');
?>