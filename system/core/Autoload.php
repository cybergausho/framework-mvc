<?php
spl_autoload_register(function ($class){
    if (file_exists('system/core/'.$class.'.php')){
        require_once 'system/core/'.$class.'.php';
    }

}); 

?>