<?php
$tittle = "Productos";

require "views/header.php";
?>

<div class="container-fluid my-5">
    <section class="container">
        <div class="row">
            <div class="table-responsive">
                <!-- <span id="mensaje"><?php echo $this->mensaje; ?></span> -->
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($this->productos as $row) {
                            $producto = new Producto();
                            $producto = $row;

                            foreach ($this->categorias as $row_2) {
                                $categoria = new Categoria();
                                $categoria = $row_2;

                                if ($producto->cate == $categoria->id) {
                                    $nom_cate = $categoria->nom;
                                }
                            }
                        ?>
                            <tr>
                                <td><?php echo $producto->id; ?></td>
                                <td><?php echo $producto->nom; ?></td>
                                <td><?php echo $producto->desc; ?></td>
                                <td><?php echo $producto->pre; ?></td>
                                <td><?php echo $producto->cant; ?></td>
                                <td><?php echo $nom_cate; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-9 col-md-offset-9 col-xs-12 text-right">
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarProducto<?php echo $producto->id; ?>"><i class="fas fa-edit"></i></button>
                                                <button class="btn bg-danger text-white btn-sm eliminar_producto" type="button" data-producto="<?php echo $producto->id; ?>"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal registrar producto -->
                            <div class="modal fade" id="editarProducto<?php echo $producto->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll;">
                                <div class="modal-dialog modal-large" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">Modificar Producto</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo constant("URL"); ?>consultaproducto/actualizarProducto" method="post">
                                            <div class="modal-body text-center">

                                                <div>
                                                    <label for="codigo">Codigo:</label>
                                                    <input readonly class="form-control" type="number" name="codigoEdit" id="codigoEdit" value="<?php echo $producto->id; ?>" readonly>
                                                </div>
                                                <div class="my-3">
                                                    <label for="nombreEdit">Nombre: </label>
                                                    <input class="form-control" type="text" name="nombreEdit" id="nombreEdit" value="<?php echo $producto->nom; ?>">
                                                </div>
                                                <div class="my-3">
                                                    <label for="descripcionEdit">Descripcíon:</label>
                                                    <textarea class="form-control" name="descripcionEdit" id="descripcionEdit" cols="30" rows="3"><?php echo $producto->desc; ?></textarea>
                                                </div>
                                                <div class="my-3">
                                                    <label for="precioEdit">Precio:</label>
                                                    <input class="form-control" type="text" name="precioEdit" id="precioEdit" value="<?php echo $producto->pre; ?>">
                                                </div>
                                                <div class="my-3">
                                                    <label for="cantidadEdit">Cantidad:</label>
                                                    <input class="form-control" type="text" name="cantidadEdit" id="cantidadEdit" value="<?php echo $producto->cant; ?>">
                                                </div>
                                                <div class="my-3">
                                                    <label for="categoriaEdit">Categoria:</label>
                                                    <select name="categoriaEdit" id="categoriaEdit" class="form-control">
                                                        <?php
                                                        foreach ($this->categorias as $row_2) {
                                                            $categoria = new Categoria();
                                                            $categoria = $row_2;
                                                        ?>
                                                            <option <?php if ($categoria->id == $producto->cate) {
                                                                        echo "selected";
                                                                    } ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nom; ?></option>
                                                        <?php
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- End Side Menu -->
<?php

require "views/footer.php";

?>