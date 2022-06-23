<form action="../Controllers/insertarArticulos.php" method="post" class="m-auto mt-4 w-50">
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="titulo" required>
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" disabled value="<?= date('Y-m-d') ?>">
    </div>
    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea class="form-control" name="contenido" id="contenido" aria-describedby="contenido" rows="4" required></textarea>
    </div>
    <input type="hidden" name="i">
    <button type="submit" class="btn btn-success">Insertar</button>
</form>
