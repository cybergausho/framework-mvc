<?php
class Login extends Controller{

    function __construct()
    {
        parent::__construct();
        //$this->view->render('login/index');
    }

    function render(){
        $this->view->render('login/index');
    }

    function insertar(){
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $password= $_POST['passw'];
        $nro_documento=$_POST['nro_documento'];
        $estado=0;
        if($this->model->insertar(['nombre'=> $nombre, 'apellido'=> $apellido, 'passw'=>$password, 'nro_documento'=>$nro_documento, 'estado'=>$estado], 'personas')){
            echo "datos insertados.";
        }else {
            echo "Error al insertar alumno.";
        }
    }
}


?>