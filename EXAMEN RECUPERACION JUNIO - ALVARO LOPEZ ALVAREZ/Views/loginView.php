<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../Views/assets/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <?php
    include 'components/navbar.php';

    ?>
    <!--Body-->

    <h1 class="text-center my-5">Login</h1>
    <!--HERO-->
    <?php
    include 'components/formLogin.php';

    if (isset($_REQUEST['login']) && $login == false) {
        echo "<h4 class='text-danger text-center mt-3'>Usuario no registrado</h4>";
    }elseif (isset($_REQUEST['nuevoUsuario']) && $login == false) {
        echo "<h4 class='text-danger text-center mt-3'>Ese usuario ya existe</h4>";
    }
    ?>

    <script src="../Views/assets/bootstrap-5/js/bootstrap.min.js"></script>
</body>

</html>