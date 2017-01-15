<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this -> load -> helper(array('form','url'));
		$this -> load-> library(array('form_validation','googlemaps'));
		$this-> load-> database();
		$this -> load->driver('session');
		

	}
	function index(){
		$this-> load->view('contact_view');
	}
}

	
?>