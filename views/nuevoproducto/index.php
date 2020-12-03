<?php
$tittle = "Nuevo Producto";

require "views/header.php";
?>

<div class="card shadow my-5 ml-5 mr-5" align="center">
  <div class="card-header py-3">
    <h2 class="m-0 font-weight-bold text-primary">Registrar Producto</h2>
    <span><?php echo $this->mensaje; ?></span>
  </div>
  <div class="card-body">
    <!-- FORM -->
    <form ACTION="<?php echo constant('URL'); ?>nuevoproducto/registrarProducto" METHOD="POST">

      <div class="md-form mb-5 col-4">
        <label data-error="wrong" data-success="right" for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>

      <div class="md-form mb-5 col-5">
        <label data-error="wrong" data-success="right" for="descripcion">Descripción:</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="12" rows="3" required></textarea>
      </div>

      <div class="md-form mb-5 col-2">
        <label data-error="wrong" data-success="right" for="precio">Precio:</label>
        <input type="number" class="form-control" name="precio" id="precio" min="1" required>
      </div>

      <div class="md-form mb-5 col-1">
        <label data-error="wrong" data-success="right" for="cantidad">Cantidad:</label>
        <input type="text" class="form-control" name="cantidad" id="cantidad" min="1" required>
      </div>

      <div class="md-form mb-5 col-4">
        <label data-error="wrong" data-success="right" for="categoria">Categoria:</label>
        <select name="categoria" id="select_categoria" class="form-control" required>
          <?php
          foreach ($this->categorias as $row) {
            $categoria = new Categoria();
            $categoria = $row;
          ?>
            <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nom; ?></option>
          <?php
          } ?>
        </select>
      </div>

      <button type="submit" class="btn hvr-hover text-white btn-lg" name="btnEnviar">Guardar</button>
    </form>
  </div>
</div>

<!-- End Side Menu -->
<?php

require "views/footer.php";

?>