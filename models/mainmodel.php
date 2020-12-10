<?php
include_once "models/producto.php";

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductos()
    {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM producto");

            while ($row = $query->fetch()) {
                $item = new Producto();
                $item->id = $row["id"];
                $item->nom = $row["nombre"];
                $item->pre = $row["precio"];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}
