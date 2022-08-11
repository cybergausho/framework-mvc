<?php 
class View{
    function __construct(){
        //echo "<p>Vista nueva</p>";
    }
    
    function render($nombre){
        require 'app/views/'.$nombre.'.php';
    }
}
?>