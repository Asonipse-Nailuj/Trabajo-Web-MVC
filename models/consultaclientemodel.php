
<?php
include_once "models/cliente.php";

class ConsultaClienteModel extends Model{

  
  public function __construct(){
    parent::__construct();
  }

  public function get(){
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

      return[];
    }

  }

  

}

?>