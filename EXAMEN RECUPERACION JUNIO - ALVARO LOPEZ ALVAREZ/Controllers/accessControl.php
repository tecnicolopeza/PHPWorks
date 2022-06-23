<?php if (!isset($_SESSION['user'])) { ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>No estas logueado, redirigiendo al login</strong>
    </div>
<?php
    header("refresh:2;url=login.php");
    exit();
}
?>