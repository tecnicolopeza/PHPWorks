<?php
require_once '../Model/Usuario.php';
include_once 'session.php';
include_once 'updateCookies.php';

if (isset($_SESSION['user'])) {
    header("Location: index.php");
} else {

    if (isset($_COOKIE['user'])) {
        $_SESSION['user'] = $_COOKIE['user'];
        $_SESSION['id'] = $_COOKIE['id'];
        header("Location: index.php");
    }

    if (isset($_REQUEST['login'])) {
        $data['username'] = $_REQUEST['username'];

        $data['user'] = Usuario::getUser($data['username']); #devuelve el usuario con ese nombre

        if ($data['user'] && $data['user']->getNombre() == $data['username']) {
            $_SESSION['user'] = $data['user']->getNombre();
            $_SESSION['id'] = $data['user']->getId();
            updateCookies(); #si el logueo es correcto actualizamos las cookies
            header("Location: index.php");
        }else{
            $login = false;
        }
    }elseif(isset($_REQUEST['nuevoUsuario'])){
        $data['username'] = $_REQUEST['username'];

        $data['user'] = Usuario::getUser($data['username']); #devuelve el usuario con ese nombre

        if (empty($data['user'])) { //En este caso el usuario no estaría registrado
            $usuario = new Usuario(NULL, $data['username']); 
            $usuario->insert(); //insertamos el usuario

            $data['user'] = Usuario::getUser($data['username']);
            $_SESSION['user'] = $data['user']->getNombre();
            $_SESSION['id'] = $data['user']->getId();

            updateCookies();//si el logueo es correcto actualizamos las cookies
            header("Location: index.php");
        }else{
            $login = false;
        }

    }   
    include '../Views/loginView.php';
    
}
