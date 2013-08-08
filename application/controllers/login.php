<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("LoginPage");
	}

	public function index(){
		$this->loadComponents();
	}

	public function submit(){
		$this->loginpage->assignValues($this->input);
		$this->loadComponents();
	}


	public function loadComponents(){
		$this->load->view("ui_login", $this->loginpage->components);
	}
}