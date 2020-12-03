<?php

class NuevoModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertCliente($datos)
    {
        // insertar datos en la BD
        try {

            $query = $this->db->connect()->prepare('INSERT INTO CLIENTE (CODIGO, NOMBRE, APELLIDO, TELEFONO, DIRECCION) VALUES(:cod, :nom, :ape, :direc, :tel)');
            $query->execute(['cod' => $datos['codigo'], 'nom' => $datos['nombre'], 'ape' => $datos['apellido'], 'direc' => $datos['direccion'], 'tel' => $datos['telefono']]);

            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            // echo "Ya existe esa matrícula";
            return false;
        }
    }
}

?>