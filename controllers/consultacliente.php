<?php

class ConsultaCliente extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render("consultacliente/index");
    }
}
