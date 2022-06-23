<form action="../Controllers/index.php" method="post">
    <label for="tipoAnimal">Elige el tipo de animal:</label>

    <select name="tipoAnimal" id="tipoAnimal">
        <option value="todos">Todos</option>
        <?php foreach ($data['animalesPorTipos'] as $animal) { ?>
            <option value="<?=$animal?>"><?= $animal ?></option>
        <?php } ?>
    </select>
    <input type="submit" class="btn btn-primary" value="FILTRAR">
</form>