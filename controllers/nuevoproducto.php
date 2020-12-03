<?php
class NuevoProducto extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->categorias = [];
    }

    function render()
    {
        $categorias = $this->model->getCategorias();
        $this->view->categorias = $categorias;
        $this->view->render("nuevoproducto/index");
    }

    function registrarProducto()
    {
        $nombre         = $_POST['nombre'];
        $descripcion    = $_POST['descripcion'];
        $precio         = $_POST['precio'];
        $cantidad       = $_POST['cantidad'];
        $categoria      = $_POST['categoria'];

        if ($this->model->insert(['nom' => $nombre, 'desc' => $descripcion, 'pre' => $precio, 'cant' => $cantidad, 'cate' => $categoria])) {
            $mensaje = "Nuevo Producto creado";
        } else {

            $mensaje = "El producto ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }

}
