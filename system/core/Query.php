<?php 
class Query {
    protected $tabla_nombre;
    protected $primary_key;
    private $db;

    public function __construct()
    {
        $this->db= new Conexion();
        $this->db->connect();
    }

    public function query($sql){
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function buscarUno($id){
        $sql = "SELECT * FROM $this->tabla_nombre WHERE $this->primary_key = $id";
        return $this->query($sql);
    }

    public function buscarTodos(){
        $sql="SELECT * FROM $this->tabla_nombre";
        return $this->query($sql);

    }
}