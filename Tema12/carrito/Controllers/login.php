<?php
require_once '../Model/User.php';
include_once 'session.php';


if (isset($_SESSION['user'])) {
    header("Location: index.php");
} else {

    if (isset($_REQUEST['nombre'])) {
        $data['nombre'] = $_REQUEST['nombre'];
        $data['password'] = $_REQUEST['password'];

        $data['user'] = User::getUser($data['nombre']); #devuelve el usuario con ese nombre

        if ($data['user'] && $data['user']->getName() == $data['nombre'] && $data['user']->getPassword() == $data['password']) {
            $_SESSION['user']['nombre'] = $data['user']->getName();
            $_SESSION['user']['token'] = $data['user']->getToken();
            $_SESSION['user']['id'] = $data['user']->getId();
            header("Location: index.php");
        }
    }
    include '../Views/loginView.php';
    
}
