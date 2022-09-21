<?php
class Alumno{
    public $alumno_nombre;
    public $alumno_url;
    private $data;
    public $nombre;
    public $apellido;
    public $nro_documento;
    
    public function __construct($data){
        $this->data = $data;
        $this->nombre = $data['nombre'];
        $this->apellido = $data['apellido'];
        $this->nro_documento = $data['nro_documento'];

   }

    /**
     * Get the value of nro_documento
     */ 
    public function getNro_documento()
    {
        return $this->nro_documento;
    }

    /**
     * Set the value of nro_documento
     *
     * @return  self
     */ 
    public function setNro_documento($nro_documento)
    {
        $this->nro_documento = $nro_documento;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}


?>