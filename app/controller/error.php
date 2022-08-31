<?php
class ErrorPropio extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje="Error al cargar el recurso.";
        //$this->view->render('error/index');
    }

    function render(){
        $this->view->render('error/index');
    }

}

?>