<?php if(!empty($data['incidencias'])){ ?>
<table class="table table-hover text-center w-75 m-auto my-3">
    <tr class="bg-secondary text-light">
        <td><b>Incidencias pendientes</b></td>
        <td><b>Profesor</b></td>
        <td><b>Fecha</b></td>
    </tr>
    <?php foreach ($data['incidencias'] as $incidencia) { ?>
        <tr class="align-middle">
            <td><?= $incidencia->getDescripcion() ?></td>
            <td><?= $incidencia->getProfesor() ?></td>
            <td><?= date('d/m/Y', strtotime($incidencia->getFecha())); ?></td>
        </tr>
    <?php } ?>
</table>
<?php } ?>