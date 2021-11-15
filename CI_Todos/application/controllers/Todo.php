<?php 

class Todo extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
       $this->load->view("todo");
    }

    public function listelem(){
        echo "Listeleme Metodu Çalıştı.";
    }

    public function silme(){
        echo "Silme Metodu Çalıştı.";
    }

    public function duzenleme(){
        echo "Düzenleme Metodu Çalıştı.";
    }


}





?>