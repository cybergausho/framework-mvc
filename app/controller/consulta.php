<?php
class Consulta extends Controller{

    function __construct()
    {   
        parent::__construct();
        $this->view->datos = [];
    }

    function render(){
        $alumnos = $this->model->buscarTodos();
        $this->view->datos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno($param = null){
        var_dump($param);
        $idAlumno= $param[0];
        $alumno = $this->model->getById($idAlumno);
        session_start();
        $_SESSION['idVerAlumno']= $alumno->nro_documento;

        $this->view->alumno= $alumno;
        $alumnos= $this->model->buscarTodos();
        $this->view->alumnos= $alumnos;
        $this->view->render('consulta/detalle');
    }

    function eliminarAlumno(){


    }

    function actualizarAlumno(){
        session_start();
        $nro_documento = $_SESSION['idVerAlumno'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        unset($_SESSION['idVerAlumno']);
        if($this->model->update(['nombre'=> $nombre, 'apellido'=> $apellido, 'nro_documento'=>$nro_documento], 'personas')){
            $alumno = new Alumno();
            $alumno->nro_documento= $nro_documento;
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;

            $this->view->alumno = $alumno;
            echo "El alumno se ha actualizado.";
        } else {
            echo "ERROR: El alumno no se pudo actualizar.";
        }
        $this->view->render('consulta/detalle');
    }
}


?>