<?php

class Todo_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public $tableName="todos";
    
    public function getAll(){

        //result --> class döner. Tüm kayıtlar çekildiğinde kullanılabilir.
        //result_array --> dizi döner. Tek kayıt çekildiğinde kullanılabilir.
       return $this->db->get($this->tableName)->result();

    }

    public function insert(){

    }

    public function delete(){

    }

    public function update(){

    }

}

