
<!DOCTYPE html>
<html lang="es">
<!-- Basic -->

<!-- http://localhost/Trabajo-Web-MVC/views/main/index.php -->
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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>   
<body>

    <?php 

    require "../header.php";

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
