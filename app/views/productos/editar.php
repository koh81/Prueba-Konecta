<?php
require APPROOT.'/views/incl/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h4 class="display-4 text-center">Edición de Productos</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="<?= URLROOT ?>productos/editar" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $data->nombre ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="referencia" placeholder="Referencia" value="<?= $data->referencia ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precio" placeholder="Precio" value="<?= $data->precio ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="peso" placeholder="Peso" value="<?= $data->peso ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="categoria" placeholder="Categoría" value="<?= $data->categoria ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="stock" placeholder="Stock" value="<?= $data->stock ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="fecha_creacion" value="<?= $data->fecha_creacion ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="datetime-local" class="form-control" name="fecha_venta" value="<?= $data->fecha_ultima_venta ?>" >
                        <small class="form-text text-muted">Fecha última venta.</small>
                    </div>
                    <input type="hidden" value="<?= $data->id ?>" name="id">
                    <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
                </form>
            </div>
        </div>
    </div>


<?php
require APPROOT . '/views/incl/header.php';
?>