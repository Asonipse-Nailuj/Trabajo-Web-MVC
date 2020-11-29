<?php

class Nuevo extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
    }

    function nuevoCliente()
    {
        $this->view->render("nuevo/cliente");
    }

    function nuevoProducto()
    {
        $this->view->render("nuevo/producto");
    }

}
