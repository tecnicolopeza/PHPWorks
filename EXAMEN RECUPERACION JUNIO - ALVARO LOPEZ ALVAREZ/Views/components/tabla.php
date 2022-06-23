
<div class="d-flex">
    <table class="table table-hover text-center mx-2 mt-3 h-50">
        <tr class="bg-dark text-light">
            <td colspan="2"><b>MASCOTAS ADOPTADAS POR <?= strtoupper($_SESSION['user']); ?></b></td>
        </tr>
        <tr class="bg-secondary text-light">
            <td><b>Nombre</b></td>
            <td><b>Animal</b></td>
        </tr>
        <?php $data['mascotasAdoptadas']; ?>
        <?php foreach ($data['mascotasAdoptadas'] as $mascota) { ?>
            <tr class="align-middle">
                <td><?= $mascota->getNombre() ?></td>
                <td><?= $mascota->getAnimal() ?></td>
            </tr>
        <?php } ?>
    </table>
    <table class="table table-hover text-center mx-2 mt-3">
        <tr class="bg-dark text-light">
            <td colspan="3"><b>MASCOTAS SIN ADOPTAR</b></td>
        </tr>

        <tr>
            <td colspan="4">
                <?php include 'orderBy.php' ?> 
            </td>
        </tr>
        <tr class="bg-secondary text-light">
            <td><b>Nombre</b></td>
            <td><b>Animal</b></td>
            <td><b>Acciones</b></td>
        </tr>
        <?php $data['mascotasAdoptadas']; ?>
        <?php foreach ($data['mascotas'] as $mascota) { ?>
            <tr class="align-middle">
                <td><?= $mascota->getNombre() ?></td>
                <td><?= $mascota->getAnimal() ?></td>
                <td>
                    <form action="../Controllers/adopta.php" method="post">
                        <input type="hidden" name="idAdopta" value="<?=$mascota->getId();?>">
                        <button type="submit" class="btn btn-success">ADOPTAR</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
