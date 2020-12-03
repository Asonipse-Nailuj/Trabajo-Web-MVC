<?php

class Controller
{

    function __construct()
    {
        $this->view = new View();
    }

    function loadModel($model)
    {
        $url = "models/" . $model . "clientemodel.php";

        if (file_exists($url)) {
            require $url;

            $modelName = $model . "ClienteModel";
            $this->model = new $modelName();
        }
    }
}
