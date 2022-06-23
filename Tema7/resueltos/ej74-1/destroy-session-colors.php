<?php

if (session_status() == PHP_SESSION_NONE)
  session_start();

unset($_SESSION['bg_colors']);//borra todos los colores de la sesion

header("Location: index.php");//me manda al index
exit();
?>