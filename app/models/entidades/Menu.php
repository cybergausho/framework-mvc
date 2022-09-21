<?php 
class Menu{
    public $menu_nombre;
    public $menu_url;
    private $data;

    public function __construct($data){
        $this->data = $data;
        $this->menu_nombre = $data['menu_nombre'];
        $this->menu_url = $data['menu_url'];
    }
}

