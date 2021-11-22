<?php

class Todo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        //Model Eğer kullanılacaksa öncesinde yüklenmelidir.
        $this->load->model("todo_model");

        //Veriler items değişkeninin içerisine aktarıldı.
        $items = $this->todo_model->getAll();

        //View'e gönderilecek olan yapı oluşturuldu.
        $viewData = array(
            "todos" => $items,
        );

        //View yüklenirken $viewData'nında gönderilmesi sağlandı.
        $this->load->view("todo", $viewData);
    }



    public function delete($id)
    {
        echo "Silme Metodu Çalıştı.";
    }

    public function duzenleme()
    {
        echo "Düzenleme Metodu Çalıştı.";
    }
}
