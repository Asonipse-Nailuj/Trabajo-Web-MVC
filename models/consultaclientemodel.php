
<?php
include_once "models/cliente.php";

class ConsultaClienteModel extends Model
{


  public function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    // insertar datos en la BD
    $items = [];

    try {

      $query = $this->db->connect()->query("SELECT * FROM cliente");

      while ($row = $query->fetch()) {
        $item = new Cliente();
        $item->cod = $row['codigo'];
        $item->nom = $row['nombre'];
        $item->ape = $row['apellido'];
        $item->direc = $row['direccion'];
        $item->tel = $row['telefono'];



        array_push($items, $item);
      }

      return $items;
    } catch (PDOException $e) {

      return [];
    }
  }

  public function update($item)
  {
    $query = $this->db->connect()->prepare("UPDATE cliente SET nombre = :nom, apellido = :ape, telefono = :tel, direccion = :direc WHERE codigo = :cod");
    try {
      $query->execute([
        "cod" => $item["cod"],
        "nom" => $item["nom"],
        "ape" => $item["ape"],
        "tel" => $item["tel"],
        "direc" => $item["direc"]
      ]);

      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function delete($cod)
  {
    $query = $this->db->connect()->prepare("DELETE FROM cliente WHERE codigo = :cod");
    try {
      $query->execute(["cod" => $cod]);

      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}

?>