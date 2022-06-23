<?php
require_once '../Model/User.php';
include_once 'session.php';
include_once 'updateCookies.php';

if (isset($_SESSION['user']['nick'])) {
    header("Location: index.php");
} else {

    if (isset($_COOKIE['nick'])) {
        $_SESSION['user']['nick'] = $_COOKIE['nick'];
        $_SESSION['user']['type'] = $_COOKIE['type'];
        $_SESSION['user']['id'] = $_COOKIE['id'];
        header("Location: index.php");
    }

    if (isset($_REQUEST['username'])) {
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];

        $data['user'] = User::getUser($data['username']); #devuelve el usuario con ese nombre

        if ($data['user'] && $data['user']->getNick() == $data['username'] && $data['user']->getPassword() == $data['password']) {
            $_SESSION['user']['nick'] = $data['user']->getNick();
            $_SESSION['user']['type'] = $data['user']->getType();
            $_SESSION['user']['id'] = $data['user']->getId();
            updateCookies();//si el logueo es correcto actualizamos las cookies
            header("Location: index.php");
        }
    }
    include '../Views/loginView.php';
    
}
