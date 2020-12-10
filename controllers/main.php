<?php

class Main extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->productos = [];
    }

    function render()
    {
        $productos = $this->model->getProductos();
        $this->view->productos = $productos;

        $this->view->render("main/index");
    }
}
