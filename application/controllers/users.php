<?php 

class Users extends CI_Controller{
    public function register(){
    	$this->load->library('form_validation');
        $this->form_validation->set_rules('f_name','First Name','required', array('required'=>'Please enter your First Name'));
		$this->form_validation->set_rules('l_name','Last Name','required', array('required'=>'Please enter your Last Name'));
		$this->form_validation->set_rules('email','Email','required', array('required'=>'Please enter your Email'));
		$this->form_validation->set_rules('date','Date','required');
		// $this->form_validation->set_rules('username','Username','required', array('required'=>'Please enter your Username'));
		// $this->form_validation->set_rules('password','Password','required', array('required'=>'Please enter your Password'));
		// $this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]', array('required'=>'Password does not match'));


		if($this->form_validation->run()){

			if($this->user_model->create_user()){
				$this->session->set_flashdata('user_registered','Mail has been sent to your Email account');
				redirect('users/login');				
			}			
		}else{
			$data['main'] = "users/register_view";
			$this->load->view('main_view',$data);	
			
		}

	}


	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){ //if user entry has no validation errors
			$email = $this->input->post('email');  //storing user's username in a variable.
			$password = $this->input->post('password');  //storing user's password in a variable.

			$user_id = $this->user_model->login($email,$password); //getting data from model
			
			
			if($user_id){
				$user_data = array('user_id'=>$user_id,
								   'email'=>$email,
                                   'logged_in'=>true);

				$this->session->set_userdata($user_data); //setting the session.
		 		$this->session->set_flashdata('login_success','You are logged in successfully'); //if login is succes this flashdata will display

				redirect('courses/index'); //and redirect to the course page

			}else{
				
				$this->session->set_flashdata('login_failed','sorry, Login Failed..');
				redirect('users/login');
			}

		}else{ //else if user entry has  validation errors
			$data['main'] = "users/login_view";
    	    $this->load->view('main_view',$data);
		}
		
	}

	public function get_user(){
		$data['user'] = $this->user_model->get_user();
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('users/login');
	}
}




 ?>