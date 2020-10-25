<?php
require APPROOT.'/views/incl/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4 text-center"><?= $data['titulo'] ?></h1>
                <hr class="my-4">
                <p class="text-center">Nuestros producto.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= URLROOT ?>productos/crear" class="btn btn-primary">Crear nuevo producto</a>
        </div>
    </div>
    <?php     if(isset($data['msg'])) :     ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    <?= $data['msg'] ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <hr class="my-4">
    <div class="row">
        <div class="col">
            <!--Table-->
            <table id="tablePreview" class="table">
                <!--Table head-->
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha Creación</th>
                    <th>Fecha Última Venta</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <!--Table head-->
                <!--Table body-->
                <tbody>
                <?php foreach ($data['productos'] as $item) : ?>
                <tr>
                    <th scope="row"><?= $item->id ?></th>
                    <td> <?= $item->nombre ?> </td>
                    <td><?= $item->referencia ?></td>
                    <td> <?= $item->precio ?> </td>
                    <td><?= $item->peso ?></td>
                    <td><?= $item->categoria ?></td>
                    <td><?= $item->stock ?></td>
                    <td><?= $item->fecha_creacion ?></td>
                    <td><?= $item->fecha_ultima_venta ?></td>
                    <td>
                        <a href="<?= URLROOT ?>productos/editar?id=<?= $item->id ?>" class="btn btn-sm btn-primary">Editar</a>

                        <a href="<?= URLROOT ?>productos/borrar?id=<?= $item->id ?>" class="btn btn-danger btn-sm">borrar</a>
                        <a href="<?= URLROOT ?>productos/vender?id=<?= $item->id ?>" class="btn btn-warning btn-sm">vender</a>
                    </td>

                </tr>
                <?php endforeach; ?>
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>
</div>


<?php
require APPROOT . '/views/incl/header.php';
?>