<?php
require APPROOT.'/views/incl/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h4 class="display-4 text-center">Creación de productos</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="<?= URLROOT ?>productos/crear" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="referencia" placeholder="Referencia" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precio" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="peso" placeholder="Peso" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="categoria" placeholder="Categoría" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="stock" placeholder="Stock" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="fecha_creacion" placeholder="Fecha" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Crear</button>
                </form>
            </div>
        </div>
    </div>


<?php
require APPROOT . '/views/incl/header.php';
?>