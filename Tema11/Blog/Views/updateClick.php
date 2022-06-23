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
    <h1 class="text-center my-4">Modify Article</h1>
    <div class="container-fluid d-flex flex-wrap justify-content-center">
        <?php foreach ($data['articulos'] as $articulo) { ?>
            <form action="../Controllers/updateArticulo.php" method="post">
                <div class="card m-3" style="width: 15rem;">
                    <div class="card-body d-flex row align-content-between">
                        <h5 class="card-title"><input class="w-100" type="text" name="titulo" id="titulo" value="<?= $articulo->getTitulo() ?>"></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><input type="text" name="fecha" id="fecha" value="<?= $articulo->getFechaPublicacion() ?>" disabled></h6>
                        <p class="card-text"><textarea name="contenido" id="contenido" cols="25" rows="8"><?= $articulo->getContenido() ?></textarea></p>
                        <input type="hidden" name="updateClick" value="<?= $articulo->getId() ?>">
                        <button type="submit" class="btn btn-success w-50 m-auto">Update</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>