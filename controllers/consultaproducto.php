<?php

class ConsultaProducto extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render("consultaproducto/index");
    }
}
