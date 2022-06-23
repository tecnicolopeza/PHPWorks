<form enctype="multipart/form-data" action="../Controllers/updateProduct.php" method="POST" class="mx-auto my-2 w-25">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="<?= $data['product']->getName() ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="description" value="<?= $data['product']->getDescription() ?>" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" id="price" aria-describedby="price" placeholder="10000" value="<?= $data['product']->getPrice() ?>" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
        <input type="file" class="form-control" name="image" id="image" aria-describedby="image">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" id="stock" aria-describedby="stock" min="0" max="99" value="<?= $data['product']->getStock() ?>" required>
    </div>
    <button type="submit" name="updateProd" value="<?= $data['product']->getId() ?>" class="btn btn-primary">Update product</button>
</form>