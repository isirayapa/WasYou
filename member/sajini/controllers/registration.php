<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registration extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this -> load -> helper(array('form','url'));
		$this -> load-> library(array('form_validation'));
		$this-> load-> database();
		

	}

	function index(){
		$this -> register();
		$this->form_validation->set_rules('contact_no', 'contact_no', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	}

	function register(){
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login_view');
		}
			
			$this -> load -> model ('user');
			if($query = $this ->user -> reg()){
				$data['account_created'] = "Account has been created";
				$this -> load -> view('login_view',$data);
			}
			else{
				$this -> load -> view('login_view',$data);
			}

			
		}
		

	
}

?>