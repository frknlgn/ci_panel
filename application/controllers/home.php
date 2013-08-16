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
	
	public function index(){
	
		$this->load->view("tmp_header");
		$this->load->view("ui_home");
		$this->load->view("tmp_footer");
	}
}