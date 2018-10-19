<?php

class Quiz extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            $this->session->set_flashdata('no_access','Sorry, You have to log in ');
            redirect('users/login');
        }

    }

  public function quizDisplay(){
      $this->load->model('quizmodel');
      $data['questions'] = $this->quizmodel->getQuestions();

      $data['main'] = "quiz_view";
      $this->load->view('main_view',$data);
  }

  public function results(){
      $data['check'] = array(
          'que1' => $this->input->post('que_id1'),
          'que2' => $this->input->post('que_id2'),
          'que3' => $this->input->post('que_id3')
      );

      $this->load->model('quizmodel');
      $data['results'] = $this->quizmodel->getQuestions();
      $data['main'] = "result_view";
      $this->load->view('main_view',$data);
  }

}




?>