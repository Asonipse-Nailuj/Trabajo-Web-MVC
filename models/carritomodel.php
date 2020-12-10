<?php
include_once "models/carrito.php";

class NuevoProductoModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategorias()
    {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM categoria");

            while ($row = $query->fetch()) {
                $item = new Categoria();
                $item->id = $row["id"];
                $item->nom = $row["nombre"];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function insert($datos)
    {
        // insertar datos en la BD
        try {

            $query = $this->db->connect()->prepare('INSERT INTO producto (nombre, descripcion, precio, cantidad, id_categoria) VALUES(:nom, :desc, :pre, :cant, :cate)');
            $query->execute(['nom' => $datos['nom'], 'desc' => $datos['desc'], 'pre' => $datos['pre'], 'cant' => $datos['cant'], 'cate' => $datos['cate']]);

            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }
    }
}
