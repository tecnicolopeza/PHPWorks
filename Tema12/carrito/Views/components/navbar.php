<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark barra-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Controllers/index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (isset($_SESSION['user'])) { ?>
        <?php } ?>
        <!-- Right elements -->
        <div class="d-flex">
            <?php if (isset($_SESSION['user'])) { ?>
                <!-- Notifications -->
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ¡Bienvenido! <b><?= $_SESSION['user']['nombre'] ?></b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
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