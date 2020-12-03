<?php
class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        
        //echo "<p>Nuevo controlador Main</p>";
    }


    function registrarCliente()
    {
        $codigo = $_POST['id'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $telefono  = $_POST['telefono'];
        $direccion  = $_POST['direccion'];

        $mensaje = "";

        if ($this->model->insertCliente(['cod' => $codigo, 'nom' => $nombre, 'ape' => $apellido, 'tel' => $telefono, 'direc' => $direccion])) {
            $mensaje = "Nuevo cliente creado";
        } else {

            $mensaje = "El cliente ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->view->render('nuevo/cliente');
    }

    function nuevoProducto()
    {
        $this->view->render("nuevo/producto");
    }
}

?>