<?php 
class Query {
    protected $nombre_tabla;
    protected $primary_key;
    private $db;

    public function __construct()
    {
        $this->db->connect();
    }

    public function query($sql){
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function buscarUno($id){
        $sql = "SELECT * FROM $this->nombre_tabla WHERE $this->primary_key = $id";
        return $this->query($sql);
    }

    public function buscarTodos(){
        $sql="SELECT * FROM $this->nombre_tabla";
        return $this->query($sql);

    }
}