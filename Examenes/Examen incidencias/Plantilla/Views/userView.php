<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="../Views/assets/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <?php //include 'components/navbar.php' ?> 
    <!--Body-->

    <h1 class="text-center mt-3">Perfil Usuario: <?= $_SESSION['user'] ?></h1>

    <?php include 'components/formUser.php' ?> 
    <!--HERO-->
    <?php include 'components/tablaUser.php' ?>

    <div class="text-center">
    <form action="../Controllers/cerrarSesion.php"  method="post">
        <input type="submit" class="btn btn-success my-4" value="Cerrar sesión">
    </form>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="../Views/assets/bootstrap-5/js/bootstrap.min.js"></script>
</body>

</html>