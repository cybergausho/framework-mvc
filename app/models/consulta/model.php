<?php
include_once('app/models/entidades/Alumno.php');
class ConsultaModel{

    /*function __construct(){
        parent::__construct();
    }  */

    public function __construct(){
        $this->tabla_nombre = 'personas';
        $this->primary_key= 'id';
        $this->query = new Query();
        }
    
    
        public function buscarTodos(){
            $list= array();
            $data = $this->query->buscarTodos($this->tabla_nombre);
            foreach ($data as $row) {
                $list[]= new Alumno($row);
            }
            return $list;
        }


/*
    function getAll(){

    }

    function get($tabla){
        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT * FROM '.$tabla);
            while ($row = $query->fetch()) {
                $item = new Alumno();
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->nro_documento = $row['nro_documento'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            echo "Error al cargar";
        }

    }


    public function getById($id){
        $item= new Alumno;

        $query = $this->db->connect()->prepare('SELECT * FROM personas WHERE nro_documento = :nro_documento');
        try {
            $query->execute(['nro_documento' => $id]);

            while ($row = $query->fetch()) {
                $item = new Alumno();
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->nro_documento = $row['nro_documento'];
            }
            return $item;

        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item, $tabla){
    
        $query = $this->db->connect()->prepare("UPDATE ".$tabla." SET nombre = :nombre, apellido = :apellido WHERE nro_documento = :nro_documento");
        try {
            $query->execute([
                'nro_documento' => $item['nro_documento'],
                'nombre' => $item['nombre'],
                'apellido' => $item['apellido']
            ]);
            return true;
        } catch(PDOException $e){
            return false;
            
        }
    
    }
    */
}