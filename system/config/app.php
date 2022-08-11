<?php
//manejo de configuraciones del sistema
const  SERVER_URL="http://localhost/mvc-login";
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
            $archivoController='app/controller/main.php';
            require_once $archivoController;
            $controller= new Main();
            return false;
        } 
        $archivoController='app/controller/'.$url[0].'.php';
        //si existe el controlador.php 
        if (file_exists($archivoController)){
            require_once $archivoController;
            $controller= new  $url[0];
            if (isset($url[1])){
                //trae la segunda url 
                try {
                    $controller->{$url[1]}();
                } catch (\Throwable $th) {
                    $controller= new ErrorPropio();        
                } 
            }
        }else{
            $controller= new ErrorPropio();
        }
        }
}




