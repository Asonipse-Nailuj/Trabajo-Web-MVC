<?php

class ConsultaCliente extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

	function render(){
		$clientes = $this->model->get();
		$this->view->clientes = $clientes;

		$this->view->render('consulta/index');

	}

    function verCliente($param = null){

		$idAlumno = $param[0];
		$alumno = $this->model->getById($idAlumno);

		session_start();
		$this->view->alumno = $alumno;
		$this->view->mensaje = "";	
		$this->view->render('consulta/detalle');

	}
}
