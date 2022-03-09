<?php

class Uyeler extends CI_Controller{

    public function index()
	{
		$this->load->view('omer');
	}

    public function uyelistele()
    {

        $uyeler=array(
            "id"   =>1,
            "adi" =>"Ahmetaha",
            "soyadi" =>"Gül",
            "email" =>"denem@denem.com"
        );
            echo "<pre>";
            print_r($uyeler);
            echo "<pre>";

}
}



