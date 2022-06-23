<form enctype="multipart/form-data" action="../Controllers/addProduct.php" method="POST" class="mx-auto my-2 w-25">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="description" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" id="price" aria-describedby="price" placeholder="10000" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
        <input type="file" class="form-control" name="image" id="image" aria-describedby="image" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" id="stock" aria-describedby="stock" value="1" min="0" max="99" required>
    </div>
    <button type="submit" class="btn btn-primary">Add to products</button>
</form>