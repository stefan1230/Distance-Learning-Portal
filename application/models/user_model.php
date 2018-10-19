<?php 

class User_model extends CI_Model{


   public function create_user(){
        
        //Generating random password
        $alphabet = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $password = array(); 
        $alpha_length = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        // $pass = $this->input->post('password');
        $pass = implode($password); 
        //-------------------------------------------------//

        $option = ['cost' => 12];
        $encripted_password = password_hash($pass,PASSWORD_BCRYPT,$option);
        if(isset($_FILES['image'])){
            $file_name =  $_FILES['image']['name'];
        }
        $data = array(
          
          
          'title' => $this->input->post('title'),
          'dob'  => $this->input->post('date'),
          'gender'  => $this->input->post('gender'),
          'address'  => $this->input->post('address'),
          'country'  => $this->input->post('country'),
          'password' => $encripted_password,
          'first_name' => $this->input->post('f_name'),
          'surname' => $this->input->post('l_name'),
          'email' => $this->input->post('email')

        );
       // $insert_data =
        $this->db->insert('users',$data);

        // return $insert_data;
//----------------------------------------------------------------------//

       //sending password in email.

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '4';
        $config['smtp_user']    = '';//your mail
        $config['smtp_pass']    = '';//mail password
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not   
    
    $email = $this->input->post('email');

    
    
    
    $this->load->library('email', $config);

    $data = array(

        'email'=> $email,
        'password' => $pass
 
          );
    $message = '<html><body>';
    $message .= '<p>Your Username : '.$email.'</p>';
    $message .= '<p>Your Password : '.$pass.'</p><br>';
    $message .= '<p>Thank you for joining with us! Hope you will enjoy studying with us.</p>';
    $message .= '<p>----MATRIX IIT----</p>';
    $message .= '</body></html>';

    // Sender email address
    $this->email->from('stefan.stanislaus@gmail.com', 'Stefan');

    // Receiver email address.for single email
    $this->email->to($email);

  
    // Subject of email
    $this->email->subject('Authentication - Matrix IIT');

    // Message in email
    $this->email->message($message);
    
    // It returns boolean TRUE or FALSE based on success or failure
    if($this->email->send()){
        $this->session->set_flashdata('user_registered','Mail has been sent to you Email account');
		redirect('users/login');
    }else{
        $data['main'] = "users/register_view";
    	$this->load->view('main_view',$data);
    }
}




       
    public function login($email,$password){
        $this->db->where('email',$email);

        $result = $this->db->get('users');

        $db_pass = $result->row(2)->password;

        if(password_verify($password,$db_pass)){

            return $result->row(0)->id; //'0'th column is the 'id' in the database
        }else{
            return false;
        }
    }


 
    }







 ?>

