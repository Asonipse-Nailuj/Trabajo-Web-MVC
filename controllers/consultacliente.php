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

   
}
