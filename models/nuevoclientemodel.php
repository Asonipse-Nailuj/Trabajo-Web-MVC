<?php

class NuevoClienteModel extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        // insertar datos en la BD
        try {

            $query = $this->db->connect()->prepare('INSERT INTO cliente VALUES(:cod, :nom, :ape, :tel, :direc)');
            $query->execute(['cod' => $datos['cod'], 'nom' => $datos['nom'], 'ape' => $datos['ape'], 'tel' => $datos['tel'], 'direc' => $datos['direc']]);

            return true;
        } catch (PDOException $e) {
            // echo $e->getMessage();
            return false;
        }
    }
}
