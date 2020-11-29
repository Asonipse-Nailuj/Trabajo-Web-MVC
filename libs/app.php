<?php
require_once "controllers/notfound.php";
class App
{

    function __construct()
    {
        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        // Cuando se ingresa sin definir controlador
        if (empty($url[0])) {
            $app_controller = "controllers/main.php";
            require_once $app_controller;
            $controller = new Main();
            $controller->loadModel("main");
            $controller->render();
            return false;
        }

        $app_controller = "controllers/" . $url[0] . ".php";

        if (file_exists($app_controller)) {
            require_once $app_controller;

            // Inicializa el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // Numero de elementos del arreglo
            $n_param = sizeof($url);

            if ($n_param > 1) {
                if ($n_param > 2) {
                    $param = [];
                    for ($i = 2; $i < $n_param; $i++) {
                        array_push($param, $url[$i]);
                    }

                    $controller->{$url[1]}($param);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->render();
            }
        } else {
            $controller = new Notfound();
        }
    }
}
