<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('email', 'email', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
 
   if($this->form_validation->run() === FALSE)
   {
     //Field validation failed.  User redirected to login page
    $this->session->set_userdata('logged_in', FALSE);
    $data['val']=1;
     $this->load->view('login_view',$data);

   }
   else
   {
     //Go to private area
    $email = $this->input->post('email');
    $this->session->set_userdata('logged_in', TRUE);
    $this -> session -> set_userdata('email',$email);
    redirect('home', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   $email = $this->input->post('email');
   $result = $this->user->login($email, $password);
 
   if($result)
   {
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
 }
}
 ?>

