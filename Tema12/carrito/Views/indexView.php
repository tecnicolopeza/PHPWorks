<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>index</title>
</head>

<body>

    <?php include 'components/navbar.php'; ?>

    <?php if(!isset($_REQUEST['nombre'])){?>

    <h3 class="text-center mt-3">Hacer petición API</h3>
    <div class="container mx-auto mt-0">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col d-flex justify-content-end">
                <form action="" method="POST" class="mt-5">
                    <div class="mb-3">
                        <input type="hidden" name="token" value="<?= $_SESSION['user']['token'] ?>">
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre">
                    </div>
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </form>
            </div>

            <div class="col d-flex justify-content-start">
                <form action="" method="POST" class="mt-5">
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio del producto</label>
                        <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio">
                    </div>
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="w-25 my-5 mx-auto bg-success text-light text-center rounded py-2">
        <h4>Su token personal es </h4>
        <h5><?= $_SESSION['user']['token'] ?></h5>
    </div>
    
    
    <?php 
    } else {
        echo "<h3 class='text-center mt-3'>Resultados API</h3>";

        //TOKEN DEL USUARIO

        $datos = file_get_contents("http://localhost/PHP_RECUPERACION_JUNIO/Tema12/carrito/Controllers/servicio.php?nombre=".$_REQUEST['nombre']."&token=".$_SESSION['user']['token']);
        $datos = json_decode($datos);

        if ($datos[count($datos)-2] != 401 && $datos[count($datos)-2] != 204) {
            echo "<div class='container d-flex justify-content-center'>";
            foreach ($datos as $producto => $valor){
                echo "<div class='card m-3' style='width: 18rem;'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>Nombre: ".$valor->nombre."</p>
                <p class='card-text'>Descripcion: ".$valor->descripcion."</p>
                <p class='card-text'>Precio: ".$valor->precio." €</p>
                <p class='card-text'>Imagen: ".$valor->imagen."</p>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        }else{
            echo "<div class='container d-flex justify-content-center'>";
                echo "<div class='card m-3' style='width: 18rem;'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>Código: ".$datos->codigo."</p>
                <p class='card-text'>Mensaje: ".$datos->mensaje."</p>";
                echo "</div>";
                echo "</div>";
        }
    ?>
    </div>
    <div class="text-center mx-auto">
        <a name="index" id="index" class="btn btn-primary " href="index.php" role="button">Volver atrás</a>
    </div>
    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>