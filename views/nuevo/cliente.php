<?php
$tittle = "Nuevo Cliente";

require "views/header.php";
?>

<div class="card shadow my-5 ml-5 mr-5" align="center">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Registrar Cliente</h2>
  </div>
  <div class="card-body">
    <!-- FORM -->
    <form ACTION="" METHOD="POST">

      <div class="md-form mb-5 col-3">
        <label data-error="wrong" data-success="right" for="id">Identificación:</label>
        <input type="number" class="form-control" name="id" id="id" required>
      </div>

      <div class="md-form mb-5 col-4">
        <label data-error="wrong" data-success="right" for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>

      <div class="md-form mb-5 col-4">
        <label data-error="wrong" data-success="right" for="apellido">Apellido:</label>
        <input type="text" class="form-control" name="apellido" id="apellido" required>
      </div>

      <div class="md-form mb-5 col-2">
        <label data-error="wrong" data-success="right" for="telefono">Telefono:</label>
        <input type="number" class="form-control" name="teleofon" id="telefono" min="1" required>
      </div>

      <div class="md-form mb-5 col-5">
        <label data-error="wrong" data-success="right" for="direccion">Direccion:</label>
        <input type="text" class="form-control" name="direccion" id="direccion" required>
      </div>

      <button type="submit" class="btn hvr-hover text-white btn-lg" name="btnEnviar">Guardar</button>
    </form>
  </div>
</div>



<!-- End Side Menu -->
<?php

require "views/footer.php";

?>