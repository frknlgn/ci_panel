<?php
include "application/controllers/Business/BusinessInterface.php";

class LoginBusiness implements BusinessInterface{

	public $loginPage;
	public $loginModel;
	public $session;
	public $input;

	public function __construct($loginPage, $loginModel, $session, $input){
		$this->loginPage = $loginPage;
		$this->loginModel = $loginModel;
		$this->session = $session;
		$this->input = $input;
	}

	public function checkAuthentication(){
		$condition = array("username" => $this->getAttr("username", "value"),
						   "password" => $this->getAttr("password", "value"));
		$result = $this->loginModel->checkAuthentication($condition);
		if($result == true){
			$this->session->set_userdata(array("valid_user" => $this->getAttr("username", "value")));
			if($this->getAttr("remindMe", "value") == "on"){
				setcookie('user', $this->getAttr("username", "value"), 0, "/ci_panel");
				setcookie('pass', $this->getAttr("password", "value"), 0, "/ci_panel");
			}
			redirect("/home");
		}
		else{
			redirect("/login/error");
		}
	}

	public function enableAlert(){
		$this->setAttr("alert", "status", "enable");
	}

	// Business standart functions (Communicate with Pages)
	public function assignValues(){
		foreach($this->loginPage->components as $component){
			if(isset($component->attr['name'])){
				$component->attr["value"] = $this->input->post($component->attr["name"]);
			}
		}
	}

	public function setAttr($component, $attr, $val){
		$this->loginPage->components->{$component}->attr[$attr] = $val;
	}

	public function getAttr($component, $attr){
		return $this->loginPage->components->{$component}->attr[$attr];
	}
}