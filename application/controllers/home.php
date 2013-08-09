<?php
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		if(!$this->session->userdata("valid_user")){
			redirect("/login");
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('valid_user');
		redirect("/login");
	}
}