<?php
include_once "models/producto.php";
include_once "models/categoria.php";

class ConsultaProductoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $items = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM producto");

            while ($row = $query->fetch()) {
                $item = new Producto();
                $item->id = $row["id"];
                $item->nom = $row["nombre"];
                $item->desc = $row["descripcion"];
                $item->pre = $row["precio"];
                $item->cant = $row["cantidad"];
                $item->cate = $row["id_categoria"];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            return [];
        }
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

    public function update($item)
    {
        $query = $this->db->connect()->prepare("UPDATE producto SET nombre = :nom, descripcion = :desc, precio = :pre, cantidad = :cant, id_categoria = :cate WHERE id = :id");
        try {
            $query->execute([
                "id" => $item["id"],
                "nom" => $item["nom"],
                "desc" => $item["desc"],
                "pre" => $item["pre"],
                "cant" => $item["cant"],
                "cate" => $item["cate"]
            ]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM producto WHERE id = :id");
        try {
            $query->execute(["id" => $id]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
