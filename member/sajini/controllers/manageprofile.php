<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manageprofile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this -> load -> helper(array('form','url'));
		$this -> load-> library(array('form_validation','googlemaps'));
		$this-> load-> database();
		$this -> load->driver('session');
		

	}

	function index(){
		
		$this->form_validation->set_rules('contact_no', 'contact_no', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		//google map
		$config['center'] = '6.8750605, 79.8571756';
		$config['zoom'] = 18;
		$this->googlemaps->initialize($config);
		$marker = array();
		$marker['position'] = '6.8750605, 79.8571756';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();




		if($this-> session ->has_userdata('email')){
			$this -> load ->model('user');
			$email = $this -> session ->userdata('email');
			
			$data['results'] = $this -> user ->getOne($email);
		
			$this -> load-> view('manageprofile_view',$data);


		}
	}
	function editProfille(){
		$this->form_validation->set_rules('contact_no', 'contact_no', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
///////////imageupload
		if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $pic = rand(1000,100000)."-".$_FILES['image']['name'];
            $pic_loc = $_FILES['image']['tmp_name'];

            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $allowed =  array('gif','png' ,'jpg','jpeg');
            if(!in_array($ext,$allowed) ) {
                echo " <script>alert('Only png, jpg, gif are allowed');</script>";
                return false;
            }else{
                $folder= "uploads/";
                if(move_uploaded_file($pic_loc,$folder.$pic))
                {
                    $imgurl = $folder.$pic;
                    //echo " <script>alert('successfully uploaded:$imgurl');</script>";
                }
                else
                {
                     return false;
                    echo " <script>alert('error while uploading file');</script>";
                } 
            }
            
        }
        /////////////////////////////imageupload

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else{
			$this -> load -> model ('user');
			$email = $this -> session ->userdata('email');
			$this -> user -> updateprofile($email);
			$this->index();
		}
	}
		
		

		
	




			
		
		

	
}


?>