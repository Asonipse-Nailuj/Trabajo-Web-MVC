<?php
$tittle = "Productos";

require "views/header.php";
?>

<div class="container-fluid my-5">
    <section class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-9 col-xs-12 text-right">
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarProducto"><i class="fas fa-edit"></i></button>
                                            <button class="btn bg-danger text-white btn-sm" type="button" data-toggle="modal" data-target="#eliminar_cliente"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>



<!-- Modal registrar producto -->
<div class="modal fade" id="editarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll;">
    <div class="modal-dialog modal-large" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Modificar Producto</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div>
                    <label for="codigo">Codigo:</label>
                    <input class="form-control" type="number" name="codigoEdit" id="codigoEdit" value="" readonly>
                </div>
                <div class="my-3">
                    <label for="nombreEdit">Nombre: </label>
                    <input class="form-control" type="text" name="nombreEdit" id="nombreEdit" value="">
                </div>
                <div class="my-3">
                    <label for="descripcionEdit">Descripcíon:</label>
                    <textarea class="form-control" name="descripcionEdit" id="descripcionEdit" cols="30" rows="3"></textarea>
                </div>
                <div class="my-3">
                    <label for="precioEdit">Precio:</label>
                    <input class="form-control" type="text" name="precioEdit" id="precioEdit" value="">
                </div>
                <div class="my-3">
                    <label for="cantidadEdit">Cantidad:</label>
                    <input class="form-control" type="text" name="cantidadEdit" id="cantidadEdit" value="">
                </div>
                <div class="my-3">
                    <label for="categoriaEdit">Categoria:</label>
                    <select name="categoriaEdit" id="categoriaEdit" class="form-control">
                        <option selected>Seleccione una categoria</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<!-- End Side Menu -->
<?php

require "views/footer.php";

?>