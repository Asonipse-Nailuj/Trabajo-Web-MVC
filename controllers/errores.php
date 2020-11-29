<?php

class Erorres extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Error al cargar la pagina o la pagina no existe";
        $this->view->render("notfound/index");
    }
}
