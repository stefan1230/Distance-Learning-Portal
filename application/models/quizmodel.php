<?php

class Quizmodel extends CI_Model{

    public function getQuestions(){
        $subject_id = $this->uri->segment(3);
        $course_id = $this->uri->segment(4);
        $this->db->select("*");
        $this->db->from("quiz");
        $this->db->where(array('main_course_id'=>$course_id,'subject_id'=>$subject_id));

        $query = $this->db->get();

        return $query->result();

        $num_data_returned = $query->num_rows();

        if($num_data_returned < 1){
            echo "No data";
            exit();
        }



    }

}



?>