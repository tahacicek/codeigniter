<?php 

class FormApp extends CI_Controller{

public function __construct()
{


    parent::__construct();
}


    

public function index()
{
		$this->load->view('form');
    
}
public function insert()
{
    $this->load->model("FormApp_Model");
    $insert = $this->FormApp_Model->insert(array(
        
        "id" => $this->input->post("id"),

        "name" => $this->input->post("name"),

        "email" => $this->input->post("email"),
        "service" => $this->input->post("service"),
        "badget" => $this->input->post("badget"),
        "message" => $this->input->post("message"),
        "createdAt" => $this->input->post("createdAt"),
      


       
    ));
  

    if ($insert) {
        redirect(base_url('form'));

    
    }

}

}
?>