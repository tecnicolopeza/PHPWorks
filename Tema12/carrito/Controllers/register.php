<?php 
    require_once '../Model/User.php';
    include_once 'generaToken.php';

    if(isset($_REQUEST['nombre'])){
        $data['nombre'] = $_REQUEST['nombre'];
        $data['contraseña'] = $_REQUEST['contraseña'];
        $data['token'] = generaToken();
        $data['user'] = new User(NULL ,$data['nombre'], $data['contraseña'], NULL, $data['token'], NULL);
        $data['user']->insert();
        header('Location: index.php');
    }

    include '../Views/registerView.php';
?>