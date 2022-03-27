<?php
class FormApp_Model extends CI_Model{

public function __construct()
{
    parent::__construct();
}

public $tableName="form";

public function getAll(){

    //result --> class döner. Tüm kayıtlar çekildiğinde kullanılabilir.
    //result_array --> dizi döner. Tek kayıt çekildiğinde kullanılabilir.
   return $this->db->get($this->tableName)->result();

}

public function insert($data=array()){

    return $this->db->insert($this->tableName,$data);
}
}
?>