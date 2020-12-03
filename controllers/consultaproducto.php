<?php

class ConsultaProducto extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->productos = [];
        $this->view->categorias = [];
    }

    function render()
    {
        $productos = $this->model->get();
        $this->view->productos = $productos;

        $categorias = $this->model->getCategorias();
        $this->view->categorias = $categorias;

        $this->view->render("consultaproducto/index");
    }

    function actualizarProducto()
    {
        session_start();
        $id     = $_POST["codigoEdit"];
        $nombre     = $_POST["nombreEdit"];
        $descripcion   = $_POST["descripcionEdit"];
        $precio   = $_POST["precioEdit"];
        $cantidad   = $_POST["cantidadEdit"];
        $categoria   = $_POST["categoriaEdit"];

        if ($this->model->update(["id" => $id, "nom" => $nombre, "desc" => $descripcion, "pre" => $precio, "cant" => $cantidad, "cate" => $categoria])) {
            $this->view->mensaje = "Producto actualizado correctamente";
        } else {
            $this->view->mensaje = "No se pudo actualizar el producto";
        }

        $this->render();
    }

    function eliminarProducto($param = null)
    {
        $id = $param[0];

        if ($this->model->delete($id)) {
            $mensaje = "Producto eliminado correctamente";
        } else {
            $mensaje = "No se pudo eliminar el producto";
        }

        $respuesta = array("mensaje" => $mensaje);
        echo json_encode($respuesta);
    }
}
