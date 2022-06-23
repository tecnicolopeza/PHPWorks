<?php
include_once('insertUser.php');
include_once('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco - Mantenimiento clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>

    <h1 class="text-center">Mantenimiento de clientes</h1>
    <table class="table table-hover text-center">
        <tr class="bg-dark text-light">
            <td><b>DNI</b></td>
            <td><b>Nombre</b></td>
            <td><b>Dirección</b></td>
            <td><b>Teléfono</b></td>
            <td colspan="3"><b>Acciones</b></td>
        </tr>
        <?php
        while ($cliente = $consulta->fetchObject()) {
        ?>
            <tr>
                <?php if (isset($_REQUEST['update']) && $cliente->dni == $_REQUEST['update']) { ?>
                    <form action="updateUser.php" method="post">
                        <td><input type="text" class="form-control" name="dni" id="dni" placeholder="DNI" value="<?= $cliente->dni ?>" required></td>
                        <td><input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?= $cliente->nombre ?>" required></td>
                        <td><input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" value="<?= $cliente->direccion ?>" required></td>
                        <td><input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="<?= $cliente->telefono ?>" required></td>
                        <td>
                            <input type="hidden" name="updateUser" value="<?= $cliente->dni ?>">
                            <button type="submit" class="btn btn-success text-light"><i class="bi bi-save"></i> Guardar</button>
                        </td>
                    </form>
                <?php } else { ?>
                    <td><?= $cliente->dni ?></td>
                    <td><?= $cliente->nombre ?></td>
                    <td><?= $cliente->direccion ?></td>
                    <td><?= $cliente->telefono ?></td>
                <?php } ?>
                <td>
                    <!--FORM BORRA USUARIOS-->
                    <form action="deleteUser.php" method="post">
                        <input type="hidden" name="deleteUser" value="<?= $cliente->dni ?>">
                        <!--enviamos el campo que nos servirá para borrar el registro-->
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Eliminar</button>
                    </form>
                </td>
                <td>
                    <!--FORM ACTUALIZA USUARIOS-->
                    <?php if (isset($_REQUEST['update']) && $cliente->dni == $_REQUEST['update']) {  
                    #Si le dan al boton actualizar valores saldrá el boton save 
                    } else { ?>
                        <form action="#" method="post">
                            <input type="hidden" name="update" value="<?= $cliente->dni ?>">
                            <!--enviamos el campo que nos servirá para modificar el registro-->
                            <button type="submit" class="btn btn-warning text-light"><i class="bi bi-pencil-square"></i> Modificar</button>
                        <?php } ?>
                        </form>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <form action="insertUser.php" method="post">
                <td>
                    <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI" required>
                </td>
                <td>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                </td>
                <td>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required>
                </td>
                <td>
                    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                </td>
                <td class="text-center" colspan="2"><button type="submit" class="btn btn-success"><i class="bi bi-check-square"></i> Nuevo cliente</button></td>
            </form>
        </tr>

    </table>

    <br>

    <?php $conexion = null; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>