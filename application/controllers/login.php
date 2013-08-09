<?php
include "application/controllers/Business/LoginBusiness.php";

class Login extends CI_Controller{

	private $loginBusiness;

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->helper("cookie");
		$this->load->model("loginPage");
		$this->load->model("loginModel");
		$this->loginBusiness = new LoginBusiness($this->loginPage, $this->loginModel, $this->session, $this->input);
		if(get_cookie("user")){
			$this->loginBusiness->setAttr("username", "value", get_cookie("user"));
			$this->loginBusiness->setAttr("password", "value", get_cookie("pass"));
		}
	}

	public function index(){
		$this->loadView();
	}

	public function submit(){
		$this->loginBusiness->assignValues();
		$this->loginBusiness->checkAuthentication();
		$this->loadView();
	}

	public function error(){
		$this->loginBusiness->enableAlert();
		$this->loadView();
	}

	public function loadView(){
		$this->load->view("ui_login", $this->loginPage->components);
	}
}