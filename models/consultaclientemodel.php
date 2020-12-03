
<?php


include_once "models/cliente.php";

class ConsulClientetaModel extends Model{

  
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
        $item->codigo = $row['codigo'];
        $item->nombre = $row['nombre'];
        $item->apellido = $row['apellido'];
        $item->direccion = $row['direccion'];
        $item->telefono = $row['telefono'];



        array_push($items, $item);
      }

      return $items;

    } catch (PDOException $e) {

      return[];
    }

  }

  

}

?>