<?php 
namespace system\ORM;

class Modelo extends ciberORM{
    //propiedad que va a contener a todas las propiedades dinamicamente 
    private $data= array();
    protected static $tabla;


    function  __construct($data=null){
        $this->data = $data;
    }

    //getter dinamico
    function __get($nombre){
        return $this->data[$nombre];
    }
    
    //setter dinamico
    function __set($nombre, $valor){
        $this->data[$nombre] = $valor;
    }

    public function getColumnas(){
        return $this->data;
    }
}