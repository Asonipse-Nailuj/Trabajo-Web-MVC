<?php
$tittle = "Clientes";

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
                        <?php

                        include_once 'models/consultaclientemodel.php';
                        foreach ($this->clientes as $row) {
                            $clientes = new Cliente();
                            $clientes = $row;
                        ?>
                            <tr id="fila-<?php echo $clientes->codigo; ?>">
                                <td><?php echo $clientes->codigo; ?></td>
                                <td><?php echo $clientes->nombre; ?></td>
                                <td><?php echo $clientes->apellido; ?></td>
                                <td><?php echo $clientes->direccion; ?></td>
                                <td><?php echo $clientes->telefono; ?></td>
                                <td><a href="<?php echo constant('URL') . 'consultacliente/verCliente/' . $clientes->codigo; ?>">Editar</a></td>
                                <td><a href="#">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<!-- Modal registrar cliente -->
<div class="modal fade" id="editarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Modificar Cliente</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div>
                    <label for="codigo">Identificacíon:</label>
                    <input class="form-control" type="number" name="codigoEdit" id="codigoEdit" value="" readonly>
                </div>
                <div class="my-3">
                    <label for="nombreEdit">Nombre: </label>
                    <input class="form-control" type="text" name="nombreEdit" id="nombreEdit" value="">
                </div>
                <div class="my-3">
                    <label for="apellidoEdit">Apellido:</label>
                    <input class="form-control" type="text" name="apellidoEdit" id="apellidoEdit" value="">
                </div>
                <div class="my-3">
                    <label for="telefonEdit">Telefono:</label>
                    <input class="form-control" type="text" name="telefonEdit" id="telefonEdit" value="">
                </div>
                <div class="my-3">
                    <label for="direccionEdit">Dirección:</label>
                    <input class="form-control" type="text" name="direccionEdit" id="direccionEdit" value="">
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