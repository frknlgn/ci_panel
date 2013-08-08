<?php
include "application/controllers/Business/LoginBusiness.php";

class Login extends CI_Controller{
	
	private $loginBusiness;

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("LoginPage");
		$this->loginBusiness = new LoginBusiness($this->loginpage, $this->input);
	}

	public function index(){
		$this->loadView();
	}

	public function submit(){
		$this->loginBusiness->assignValues();
		$this->loadView();
	}

	public function loadView(){
		$this->load->view("ui_login", $this->loginpage->components);
	}
}