<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manageprofile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this -> load -> helper(array('form','url'));
		$this -> load-> library(array('form_validation','googlemaps'));
		// $this->load->library('googlemaps');
		$this-> load-> database();
		$this ->load ->driver('session');
		

	}

	function index(){
		// $this -> getValues();
		$this->form_validation->set_rules('contact_no', 'contact_no', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
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
			// $this -> load-> view('manageprofile_view',$data);
			// $this -> load ->model('user');
			// $this ->user-> updateprofile();
			// $this -> load -> view('manageprofile_view');
			$this -> load-> view('manageprofile_view',$data);


		}
		
		

		
	}

	
		// function getValues(){
		// 	if($this-> session ->has_userdata('email')){
		// 		// $this -> session ->userdata('name');
		// 		// $this -> session ->userdata('email');
		// 		// $this -> session ->userdata('contact_no');
		// 		// $this -> session ->userdata('address');
		// 		// $this -> session ->userdata('district');

		// 		$this -> load ->model('user');
		// 		$email = $this -> session ->userdata('email');
		// 		$data['results'] = $this -> user ->getOne($email);
		// 		$this -> load-> view('manageprofile_view',$data);
		// 	}
			/*$this -> load ->model('user');
			$this ->user-> updateprofile('email');
			$this -> load -> view('manageprofile_view');
			
		 }*/
		
		

	
}


?>