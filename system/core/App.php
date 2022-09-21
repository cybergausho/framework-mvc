<?php
//manejo de configuraciones del sistema
const  SERVER_URL="http://localhost/framework-mvc";
const  COMPANY=  "Framework MVC";

date_default_timezone_set("America/Argentina/Buenos_Aires");
require_once  'app/controller/error.php';
class App{
    function __construct(){
        $url =isset($_GET['url']) ? $_GET['url']: null; 
        $url= rtrim($url,'/');
        $url = explode('/',$url);
        //http://localhost/expenses/user/updatePhoto to /user/updatePhoto
        if (empty($url[0])){
            //se ingresa sin controlador
            $archivoController='app/controller/main.php';
            require_once $archivoController;
            $controller= new Main();
            $controller->cargarModelo('main');
            $controller->render();
            return false;
        } 
        
        $archivoController='app/controller/'.$url[0].'.php';
        //si existe el controlador.php 
        if (file_exists($archivoController)){
            require_once $archivoController;
            $controller= new  $url[0];
            $controller->cargarModelo($url[0]);
            //comprobar si ademas de metodo hay params
            $nparam= sizeof($url);
            if ($nparam > 1){
                if ($nparam > 2){
                    $param= [];
                    for ($i=2; $i < $nparam ; $i++) { 
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
            $controller->render();
            }
        }else{
            $controller= new ErrorPropio();
        }
        }
}




