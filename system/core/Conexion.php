<?php 
class Conexion{

    private $DB_DRIVER;
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;


    public function __construct(){
        $this->driver= constant('DB_DRIVER');
        $this->port= constant('DB_PORT');
        $this->host= constant('DB_HOST');
        $this->db= constant('DB_NAME');
        $this->user= constant('DB_USER');
        $this->password= constant('DB_PASSWORD');
        $this->charset= constant('DB_CHARSET');
    }
    
    public function connect(){
        try{
            $conexion= $this->driver.":host=".$this->host.":".$this->port.";dbname=".$this->db.";charset=".$this->charset;
            $this->connect = new PDO($conexion, $this->user, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connect; //objeto pdo
    } catch(PDOException $e){
        //$this->connect = "Error de conexion.";
        print_r("ERROR: ".$e->getMessage());
    }
    
}

}

?>