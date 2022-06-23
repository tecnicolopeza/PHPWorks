<?php 
include_once '../Model/Producto.php';
include_once '../Model/User.php';
include 'session.php';

if(isset($_REQUEST['token'])){

    $codigo = 200;
    $mensaje = "";
    $productos = []; 

    $tokenEnviado = $_REQUEST['token'];
    $data['user'] = User::getUser($_SESSION['user']['nombre']);
    $token = $data['user']->getToken();

    if ($tokenEnviado == $token) {
        if(isset($_REQUEST['nombre'])){

            $data['nombre'] = $_REQUEST['nombre']; 
            $data['products'] = Producto::searchProduct($data['nombre']);
    
            if(!empty($data['products'])){
                foreach ($data['products'] as $product){
                    $productos[] = ['nombre'=>$product->getName(), 'descripcion'=>$product->getDescription(),
                    'precio'=>$product->getPrice(), 'imagen'=>$product->getImage()];       
                }
                $mensaje = "USUARIO AUTORIZADO";
                $codigo = 200;
            }else{
                $mensaje = "NO SE ENCONTRARON COINCIDENCIAS";
                $codigo = 204;
            }
    
        }
    }

    $productos[]= $codigo;
    $productos[] = $mensaje;

}else{

    $mensaje = "FALTA TOKEN DE ACCESO";
    $codigo = 401;
    $productos['codigo']= $codigo;
    $productos['mensaje'] = $mensaje;
}


//PRUEBAS
$json_response = json_encode($productos);
echo $json_response;

echo "<br><br>";
$datos = json_decode($json_response);
print_r($datos);

echo "<br><br>";
echo $datos[count($datos)-2];


?>