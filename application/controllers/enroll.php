<?php

class enroll extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('no_access','Sorry, You have to log in to Enroll to a Course');
            redirect('users/login');
        }

    }

    public function index(){

        $this->course_model->enroll_check();
        $this->session->set_flashdata('enroll',"You've now enrolled to this  course");
        redirect('courses/get_module/'.$this->uri->segment(3));
    }

    

    public function course(){
        $data['view'] = $this->course_model->view();
        $data['view1'] = $this->course_model->view1();	
        $data['main'] = "subject_view";
        $this->load->view('main_view',$data);
    }
       
     

}



       
    


?>