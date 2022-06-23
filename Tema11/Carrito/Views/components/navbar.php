<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark barra-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Controllers/index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <a class="nav-link text-light" href="../Controllers/index.php">All products</a>
                <a class="nav-link text-light" href="../Controllers/search.php">Search products <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin Actions
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../Controllers/insertarArticulos.php">Add products</a></li>
                        <li><a class="dropdown-item" href="#">Delete products</a></li>
                        <li><a class="dropdown-item" href="#">Update products</a></li>
                    </ul>
                </li>
            </ul>

        <!-- Left links -->
        </div>
        <!-- Right elements -->
        <div class="d-flex">
            <?php if(!isset($_REQUEST['cart'])){ ?>
            <!-- Notifications -->
            <div class="dropdown">
                <a class="text-reset me-3" href="../Controllers/showCart.php" id="navbarDropdownMenuLink" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart2" style="color: white" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        <?php if(!isset($_SESSION['cart'])){ ?>
                            <span class="badge rounded-pill badge-notification bg-primary">0</span>
                        <?php }else{ ?>
                            <span class="badge rounded-pill badge-notification bg-primary"><?= $_SESSION['totalProdCart']; ?></span>
                        <?php } ?>
                    </svg>
                </a>
            </div>
        </div>
        <?php } ?>
        <!-- Right elements -->
    </div>
</nav>
<!-- Navbar -->