<?php 

class Courses extends CI_Controller{
// 	public function __construct(){
//     parent::__construct();
// 	if(!$this->session->userdata('logged_in')){		
// 		redirect('users/login');
// 		$this->session->flashdata('no_access','Sorry, You have to log in to access this page');
// 	}
// }


	public function index(){
		$data['main_course'] = $this->course_model->get_course();

		$data['main'] = "course_view";
        $this->load->view('main_view',$data);
	}

	public function get_module($id){
		
		$data['subjects'] = $this->course_model->get_module($id);		

        $data['main'] = "module_view";
        $this->load->view('main_view',$data);

	}

	public function get_id($id){
		$data['get_id'] = $this->course_model->get_course_id($id);

		$course_id = $this->course_model->get_course_id($id);

			// if($course_id){
			// 	$user_data = array('course_id'=>$course_id);
			// }
			// $this->session->set_userdata($user_data);
	}

	public function module(){
		$data['main'] = "enrolled_view";
        $this->load->view('main_view',$data);
	}

	public function video(){
		$data['video'] = $this->course_model->get_video();

		$data['main'] = "video_view";
        $this->load->view('main_view',$data);
	}

	
}

 ?>