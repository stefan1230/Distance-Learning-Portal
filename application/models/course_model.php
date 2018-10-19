<?php 

class Course_model extends CI_Model{

    public function get_course(){
        $result = $this->db->get('main_course');
        return $result->result();
    }


    public function get_module($id){
        // $this->db->where('main_course_id',$main_course_id);
		// $query = $this->db->get('subjects');
        // return $query->row();
        
       // $query = $this->db->query('SELECT subject_name from subjects,main_course where subjects.main_course_id = main_course.'.$id);
        //return $query->row();

        $query = $this->db->get_where('subjects',array('main_course_id'=>$id));
        return $query->result();
    }

    // public function get_course_id($id){
    //     // $query = $this->db->query('SELECT id from main_course');
    //     // return $query->row();

    //     $this->db->where('id', $id);
	// 	$query = $this->db->get('main_course');
		

    //     if ($query->num_rows() > 0)    {
    //         return $query->row(); 
    //      }
    // }

    public function enroll(){
        $user_id = $this->session->userdata('user_id');
        $course_id = $this->uri->segment(3);
        $data = array(
            'student_id' => $user_id,
            'course_id' =>  $course_id);
          $this->db->insert('enroll',$data);
  
    }

    public function get_video(){
        $subject_id = $this->uri->segment(3);
        $course_id = $this->uri->segment(4);
        
        $this->db->select('*');
        $query = $this->db->get_where('video_lessons',array('subject_id'=>$subject_id,'main_course_id'=>$course_id));
        
        return $query->result();
    }

    public function get_data(){
        $user_id = $this->session->userdata('user_id');
        $course_id = $this->uri->segment(3);

        $query = $this->db->get_where('enroll',array('student_id'=>$user_id,'course_id'=>$course_id));
        return $query->result();
    }
    
    public function view(){
        $course_id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('subjects');
        $this->db->join('main_course','subjects.main_course_id = main_course.id','natural');
        $this->db->where('id',$course_id);
        $query = $this->db->get();
        return $query->result();
     }

     public function view1(){
        $course_id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('subjects');
        $this->db->join('main_course','subjects.main_course_id = main_course.id','natural');
        $this->db->where('id',$course_id);
        $query = $this->db->get();
        return $query->row();
     }



    public function enroll_check(){
        $user_id = $this->session->userdata('user_id');
        $course_id = $this->uri->segment(3);       

        $result = $this->db->query("SELECT *  FROM enroll WHERE student_id = '". $user_id."' AND course_id = '".$course_id."'");

        // return $checkenroll->row_array();
        $count = $result->row_array();

        if(count($count) > 0) {
            $this->session->set_flashdata('enrolled',"You've already enrolled for this course.");
            redirect('courses/get_module/'.$this->uri->segment(3));
          } else {

            $user_id = $this->session->userdata('user_id');
            $course_id = $this->uri->segment(3);

            $data = array(
                'student_id' => $user_id,
                'course_id' =>  $course_id);
              $this->db->insert('enroll',$data);
          } 

    }
    
}







?>