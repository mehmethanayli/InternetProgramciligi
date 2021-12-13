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


    public function insert()
    {
        $this->load->model("todo_model");

        $todo_description = $this->input->post("todo_description");

        $insert = $this->todo_model->insert(array(
            "description" => $todo_description,
            "complatedAt" => 0,
            "createdAt"  => date("Y-m-d H:i:s")
        ));

        if ($insert) {
            redirect(base_url());
        }
    }

    public function delete($id)
    {
        $this->load->model("todo_model");

        $this->todo_model->delete($id);

        redirect(base_url());
    }

    public function isComplatedSetter($id)
    {
        $this->load->model("todo_model");
        $complated = ($this->input->post("complated") == true) ? 1 : 0;
        $this->todo_model->update($id, array(
            "complatedAt" => $complated
        ));
    }
}
