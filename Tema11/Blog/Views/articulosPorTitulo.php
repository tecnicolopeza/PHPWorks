<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include 'components/navbar.php'; ?>
    <!--Body-->
    <h1 class="text-center my-4">Articles by name</h1>
    <div class="container-fluid d-flex flex-wrap justify-content-center">
        <form action="../Controllers/articulosPorTitulo.php" method="post" class="row g-3">
            <div class="col-auto">
                <input type="text" class="form-control" id="nameArticle" name="nameArticle" placeholder="Name Article">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
        </form>
    </div>
    <?php if (isset($data['articulos']) && !empty($data['articulos'])) {
        include 'components/mensajes.php';
        include 'components/cardsArticles.php';
    } elseif (isset($data['articulos']) && empty($data['articulos'])) { ?>
        <div class="container-fluid d-flex flex-wrap justify-content-center">
            <h5 class="text-center mt-3">No matches found</h5>
        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>