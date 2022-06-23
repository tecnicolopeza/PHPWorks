<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../Views/assets/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <?php include 'components/navbar.php' ?> 
    <!--Body-->
    
    <h1 class="text-center mt-3">HOME</h1>

    <!--HERO-->
    <?php include 'components/tabla.php' ?> 
    
    <form action="../Controllers/sacarDatosFichero.php" class="mx-5 mb-5" method="post">
        <input type="submit" class="btn btn-primary" name="insertDatosFichero" value="CARGAR MASCOTAS DEL FICHERO">
    </form>

    <script src="../Views/assets/bootstrap-5/js/bootstrap.min.js"></script>
</body>

</html>