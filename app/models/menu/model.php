<?php
class MenuModelDataMapper{

    public function __construct(){
    $this->tabla_nombre = 'menus';
    $this->primary_key= 'menus_id';
    $this->query = new Query();
    }

    public function buscarPorId($id){
        $data = $this->query->buscarUno($this->tabla_nombre, $this->primary_key, $id);
        return new Menu($data);
    }

    public function buscarTodos(){
        $list= array();
        $data = $this->query->buscarTodos();
        foreach ($data as $row) {
            $list[]= new Menu($row);
        }
        return $list;
    }

}

?>