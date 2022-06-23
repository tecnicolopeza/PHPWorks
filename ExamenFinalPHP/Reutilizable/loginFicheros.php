<?php
include_once 'session.php';

if (!isset($_SESSION['user'])) {
    if (isset($_REQUEST['username'])) {
        $data['username'] = $_REQUEST['username'];
    
        function existeUsuario($usuario)
        {
            $fp = fopen('../Model/usuarios.txt', 'r');
            while (!feof($fp)) {
                $linea = explode(',', fgets($fp));
                if ($linea[0] == $usuario) {
                    fclose($fp);
                    $_SESSION['user'] = trim($linea[0]);
                    $_SESSION['perfil'] = trim($linea[1]);
                    setcookie('user', $_SESSION['user'], strtotime("+1 year"));
                    return true;
                }
            }
            fclose($fp);
            return false;
        }
    
        if(existeUsuario($data['username'])==true && $_SESSION['perfil']=="user"){
            header('Location: index.php');
        }
    }
    include '../Views/loginView.php';

}else{
    if($_SESSION['user']=="user"){
        header('Location: user.php');
    }
}