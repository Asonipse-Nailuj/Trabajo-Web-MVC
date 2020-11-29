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
                            <th scope="col">Usuario</th>
                            <th scope="col">Eliminar</th>

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
                                <button class="btn btn-primary btn-sm my-0">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm my-0">Eliminar</button>
                            </td>
                        </tr>

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