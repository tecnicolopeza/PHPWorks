<?php include 'mensajes.php' ?>

<div class="container-fluid d-flex flex-wrap justify-content-center">
    <?php foreach ($data['articulos'] as $articulo) { ?>
        <div class="card m-3" style="width: 15rem;">
            <div class="card-body d-flex row align-content-between">
                <h5 class="card-title"><?= $articulo->getTitulo() ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $articulo->getFechaPublicacion() ?></h6>
                <?php if (strlen($articulo->getContenido()) > 100) { ?>
                    <p class="card-text"><?= substr($articulo->getContenido(), 0, 100) . " ..." ?></p>
                <?php }else{ ?>
                    <p class="card-text"><?= substr($articulo->getContenido(), 0, 100) ?></p>
                <?php } ?>
                <div class="container d-flex justify-content-center">
                    <form class="mx-1" action="../Controllers/deleteArticulo.php" method="post">
                        <input type="hidden" name="deleteArticulo" value="<?= $articulo->getId() ?>">
                        <input type="hidden" name="b">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <form class="mx-1" action="../Controllers/updateClick.php" method="post">
                        <input type="hidden" name="updateArticulo" value="<?= $articulo->getId() ?>">
                        <input type="hidden" name="m">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
