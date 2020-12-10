<?php
class Carrito extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render()
    {
        $this->view->render("carrito/index");
    }

    function registrarCarrito()
    {
        $codigo = $_POST['id'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $telefono  = $_POST['telefono'];
        $direccion  = $_POST['direccion'];

        if ($this->model->insert(['cod' => $codigo, 'nom' => $nombre, 'ape' => $apellido, 'tel' => $telefono, 'direc' => $direccion])) {
            $mensaje = "Nuevo cliente creado";
        } else {

            $mensaje = "El cliente ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
