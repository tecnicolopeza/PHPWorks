<?php if (!empty($data['incidencias'])) { ?>
    <table class="table table-hover text-center w-75 m-auto">
        <tr class="bg-secondary text-light">
            <td><b>Descripcion</b></td>
            <td><b>Profesor</b></td>
            <td><b>Fecha</b></td>
            <td><b>Estado</b></td>
            <td><b>Reparador</b></td>
            <td colspan="3"><b>Actions</b></td>
        </tr>
        <?php foreach ($data['incidencias'] as $incidencia) { ?>
            <tr class="align-middle">
                <td><?= $incidencia->getDescripcion() ?></td>
                <td><?= $incidencia->getProfesor() ?></td>
                <td><?= $incidencia->getFecha() ?></td>
                <td><?= $incidencia->getEstado() ?></td>
                <td><?= $incidencia->getAdmin() ?></td>
                <td>
                    <form action="../Controllers/borrar.php" method="post">
                        <?php if($incidencia->getEstado()=="REPARADA"){ ?>
                            <input type="hidden" name="borrar" value="<?= $incidencia->getId() ?>">
                            <button type="submit" class="btn btn-dark" disabled>Borrar</button>
                        <?php }else{ ?>
                            <input type="hidden" name="borrar" value="<?= $incidencia->getId() ?>">
                            <button type="submit" class="btn btn-dark">Borrar</button>
                        <?php } ?>
                    </form>
                    <form action="../Controllers/cambiarEstado.php" method="post">
                        <input type="hidden" name="idIncidencia" value="<?= $incidencia->getId() ?>">
                        <button type="submit" class="btn btn-primary mt-2">Reparada</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>