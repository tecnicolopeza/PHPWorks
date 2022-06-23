<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Views/css/styles.css">
</head>

<body>
    <!--Header-->
    <?php
    include 'components/navbar.php';
    ?>
    <!--Body-->

    <h1 class="text-center my-3">Delete Product</h1>

    <!--HERO-->
    <!-- Searcher formulario borrar productos -->
    <div class="container-fluid d-flex flex-wrap justify-content-center mt-5">
        <form action="../Controllers/deleteProduct.php" method="post" class="row g-3">
            <div class="col-auto">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name Product">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
        </form>
    </div>

    <?php
    include 'components/alerts.php';

    if (isset($_REQUEST['name'])) {
        include 'components/tableDelete.php';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>