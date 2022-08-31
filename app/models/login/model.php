<?php

class LoginModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function insertar($datos, $tabla){
        //var_dump($datos);
        $query= $this->db->connect()->prepare('INSERT INTO '.$tabla.' (NOMBRE, APELLIDO, NRO_DOCUMENTO, ESTADO) VALUES (:nombre, :apellido, :nro_documento, :estado)');
        try {
            $query->execute(['nombre'=> $datos['nombre'], 'apellido' => $datos['apellido'],'nro_documento' =>$datos['nro_documento'],'estado'=> $datos['estado']]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
        //$this->model->insertar(); A FUTURO
    }
}