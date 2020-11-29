<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../public/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/custom.css">
    <!-- Font Awesone CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

</head>
<body>

    <?php 

    require "../header.php";

    ?>


<div class="card shadow my-5 ml-5 mr-5" align="center">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Registrar Cliente</h6>
        </div>
        <div class="card-body">
            <!-- FORM -->
            <form ACTION="" METHOD="POST">

            <div class="md-form mb-3 col-6">
                <label data-error="wrong" data-success="right" for="id">Codigo:</label>
                <input type="number" class="form-control" name="id" id="id">
              </div>

              <div class="md-form col-6">
                <label data-error="wrong" data-success="right" for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>

              <div class="md-form mb-3 col-6">
                <label data-error="wrong" data-success="right" for="descripcion">Descripción:</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="12" rows="2"></textarea>
              </div>

              <div class="md-form mb-3 col-6">
                <label data-error="wrong" data-success="right" for="precio">Precio:</label>
                <input type="number" class="form-control" name="precio" id="precio">
              </div>
              
              <div class="md-form mb-3 col-6">
                <label data-error="wrong" data-success="right" for="cantidad">Cantidad:</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad">
              </div>

              <div class="md-form mb-3 col-6">
                <label data-error="wrong" data-success="right" for="categoria">Categoria:</label>
                <select name="categoria" id="categoria" class="form-control">
                    <option value="" selected>Seleccione una categoria</option>
                    <option value="">#</option>
                    <option value="">#</option>

                </select>
              </div>

              <input type="submit" class="btn btn-primary mt-4" name="enviar" value="Guardar">
             </form>
        </div>
    </div>

    <!-- End Side Menu -->
    <?php 

     require "../footer.php";

    ?>
      <!-- ALL JS FILES -->
    <script src="../../public/js/jquery-3.2.1.min.js"></script>
    <script src="../../public/js/popper.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
    <script src="../../public/js/jquery.superslides.min.js"></script>
    <script src="../../public/js/bootstrap-select.js"></script>
    <script src="../../public/js/inewsticker.js"></script>
    <script src="../../public/js/bootsnav.js."></script>
    <script src="../../public/js/images-loded.min.js"></script>
    <script src="../../public/js/isotope.min.js"></script>
    <script src="../../public/js/owl.carousel.min.js"></script>
    <script src="../../public/js/baguetteBox.min.js"></script>
    <script src="../../public/js/form-validator.min.js"></script>
    <script src="../../public/js/contact-form-script.js"></script>
    <script src="../../public/js/custom.js"></script>
</body>
</html>