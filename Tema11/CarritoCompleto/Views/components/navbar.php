<?php include_once '../Controllers/navbar.php'; ?>

<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark barra-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Controllers/index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (isset($_SESSION['user'])) { ?>
            <!--Si estas logueado-->
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link text-light" href="../Controllers/index.php">All products</a>
                    <a class="nav-link text-light" href="../Controllers/search.php">Search products</a>
                    <?php if ($_SESSION['user']['type'] == 'admin') { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin actions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="../Controllers/addProduct.php">Add products</a></li>
                                <li><a class="dropdown-item" href="../Controllers/deleteProduct.php">Delete products</a></li>
                                <li><a class="dropdown-item" href="../Controllers/updateProduct.php">Update products</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
                <!-- Left links -->
            </div>
        <?php } ?>
        <!-- Right elements -->
        <div class="d-flex">
            <?php if (isset($_SESSION['user'])) { ?>
                <!-- Notifications -->
                <div class="collapse navbar-collapse flex-grow-1 text-right carrito" id="navbarNavDropdown">
                    <a class="text-reset me-3" href="../Controllers/showCart.php" id="navbarDropdownMenuLink" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart2" style="color: white" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            <span class="badge rounded-pill badge-notification bg-primary"><?= $data['count']->total; ?></span>
                    </svg>
                    </a>
                </div>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome! <b><?= $_SESSION['user']['nick'] ?></b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="../Controllers/logout.php?s">Log out</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Update products</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
    <?php }else{ ?>
        <div class="collapse navbar-collapse text-right" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <a class="nav-link text-light" href="../Controllers/login.php">Login</a>
                    <a class="nav-link text-light" href="../Controllers/register.php">Register</a>
                </ul>
        </div>
        <?php } ?>
    <!-- Right elements -->
    </div>
</nav>
<!-- Navbar -->
