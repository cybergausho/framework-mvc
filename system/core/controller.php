<?php 
class Controller{
    //controlador base
    function __construct(){
        //inicializa clase vistas
        $this->view= new View();
        
    }

    function cargarModelo($model){
        //inicializa modelo
        $url= 'app/models/'.$model.'/model.php';
        //echo $url;
        if (file_exists($url)){
            require_once $url;
            $nombreModelo= $model.'Model';
            $this->model = new $nombreModelo();
        } 
}
}
?>