<?php
$tittle = "Clientes";

require "views/header.php";
?>

<div class="container-fluid my-5">
    <section class="container">
        <div class="row">
            <div class="table table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="text-center">
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
                        $contador = 1;
                        foreach ($this->clientes as $row) {
                            $cliente = new Cliente();
                            $cliente = $row;

                        ?>
                            <tr>
                                <td><?php echo $contador++; ?></td>
                                <td><?php echo $row->cod; ?></td>
                                <td><?php echo $row->nom; ?></td>
                                <td><?php echo $row->ape; ?></td>
                                <td><?php echo $row->direc; ?></td>
                                <td><?php echo $row->tel; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-9 col-md-offset-9 col-xs-12 text-right">
                                            <div class="btn-group" role="group">
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarCliente<?php echo $row->cod; ?>"><i class="fas fa-edit"></i></button>
                                                <button class="btn bg-danger text-white btn-sm eliminar_cliente" type="button" data-cliente="<?php echo $row->cod; ?>"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal registrar cliente -->
                            <div class="modal fade" id="editarCliente<?php echo $row->cod; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <form action="<?php echo constant("URL"); ?>consultacliente/actualizarCliente" method="post">
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
                                                    <input class="form-control" type="number" name="codigoEdit" id="codigoEdit" value="<?php echo $row->cod; ?>" readonly>
                                                </div>
                                                <div class="my-3">
                                                    <label for="nombreEdit">Nombre: </label>
                                                    <input class="form-control" type="text" name="nombreEdit" value="<?php echo $row->nom; ?>">
                                                </div>
                                                <div class="my-3">
                                                    <label for="apellidoEdit">Apellido:</label>
                                                    <input class="form-control" type="text" name="apellidoEdit" value="<?php echo $row->ape; ?>">
                                                </div>
                                                <div class="my-3">
                                                    <label for="telefonEdit">Telefono:</label>
                                                    <input class="form-control" type="number" name="telefonoEdit" value="<?php echo $row->tel; ?>">
                                                </div>
                                                <div class="my-3">
                                                    <label for="direccionEdit">Dirección:</label>
                                                    <input class="form-control" type="text" name="direccionEdit" value="<?php echo $row->direc; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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