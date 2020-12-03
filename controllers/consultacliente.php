<?php

class ConsultaCliente extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->clientes = [];
    }

    function render()
    {


        $clientes = $this->model->get();
        $this->view->clientes = $clientes;


        $this->view->render("consultacliente/index");
    }

    function actualizarCliente()
    {
        session_start();
        $codigo     = $_POST["codigoEdit"];
        $nombre     = $_POST["nombreEdit"];
        $apellido   = $_POST["apellidoEdit"];
        $direccion   = $_POST["direccionEdit"];
        $telefono   = $_POST["telefonoEdit"];

        if ($this->model->update(["cod" => $codigo, "nom" => $nombre, "ape" => $apellido, "direc" => $direccion, "tel" => $telefono])) {
            $this->view->mensaje = "Cliente actualizado correctamente";
        } else {
            $this->view->mensaje = "No se pudo actualizar el cliente";
        }

        $this->render();
    }


    function eliminarCliente($param = null)
    {
        $cod = $param[0];

        if ($this->model->delete($cod)) {
            $mensaje = "Cliente eliminado correctamente";
        } else {
            $mensaje = "No se pudo eliminar el cliente";
        }

        $respuesta = array("mensaje" => $mensaje);
        echo json_encode($respuesta);
    }
}
