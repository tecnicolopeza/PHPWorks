<?php if (isset($_REQUEST['b'])) { ?> <!--Borrado mensaje-->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se ha borrado correctamente</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }elseif(isset($_REQUEST['m'])) { ?> <!--Update mensaje-->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se ha modificado correctamente</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }elseif(isset($_REQUEST['i'])){ ?> <!--Insert mensaje-->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se ha insertado correctamente</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>