<?php

class Home extends CI_Controller{

	public function index(){

		 $data['main'] = "home/home_view";
         $this->load->view('main_view',$data);//'main' in the main_view.php will load the home_view..
	}

}


?>
