<?php
if (!empty($_SESSION['alert']['type'])) {

    #Add 1 product to cart
    if ($_SESSION['alert']['type'] == "addToCart") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>It has been added to the cart successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['type']);
    } elseif ($_SESSION['alert']['type'] == "deleteToCart") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>It has been delete to the cart successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['type']);
    } elseif ($_SESSION['alert']['type'] == "deleteAllToCart") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>The cart has been emptied successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['type']);
    } elseif ($_SESSION['alert']['type'] == "search") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>The search was successful</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['type']);
    } elseif ($_SESSION['alert']['type'] == "addProduct") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Product added successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['type']);
    } elseif ($_SESSION['alert']['type'] == "deleteProduct") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Product deleted successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']['type']);
    } elseif ($_SESSION['alert']['type'] == "updateProduct") { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Product updated successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
        if (isset($_REQUEST['u'])) { //daba problemas el alert
            unset($_SESSION['alert']['type']);
        }
    }
}

?>