<?php

class Consulta extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function verClientes()
    {
        $this->view->render("consulta/clientes");
    }

    function verProductos()
    {
        $this->view->render("consulta/productos");
    }

}
