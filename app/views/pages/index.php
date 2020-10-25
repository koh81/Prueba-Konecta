<?php
require APPROOT.'/views/incl/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4 text-center"><?= $data['titulo'] ?></h1>
                <p class="lead text-center">Prueba técnica de Konecta</p>
                <hr class="my-4">
                <p class="text-center">Selecciona si deseas comprar o vender un producto.</p>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary btn-lg btn-block" href="<?= URLROOT ?>productos" role="button">Ver Productos</a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>


<?php
require APPROOT . '/views/incl/header.php';
?>