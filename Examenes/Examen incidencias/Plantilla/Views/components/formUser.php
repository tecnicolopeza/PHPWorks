<form action="../Controllers/user.php" method="post" class="m-auto my-4 w-50">
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" disabled value="<?= date('Y-m-d') ?>">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Nueva Incidencia</label>
        <textarea class="form-control" name="descripcion" id="descripcion" aria-describedby="descripcion" rows="4" required></textarea>
    </div>
    <button type="submit" name="nuevaIncidencia" class="btn btn-success">Registrar</button>
</form>