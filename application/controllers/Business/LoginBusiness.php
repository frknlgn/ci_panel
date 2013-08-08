<?php
class LoginBusiness{

	public $loginPage;
	public $input;

	public function __construct($loginPage, $input){
		$this->loginPage = $loginPage;
		$this->input = $input;
	}

	public function assignValues(){
		foreach($this->loginPage->components as $component){
			if(isset($component->attr['name'])){
				$component->attr["value"] = $this->input->post($component->attr["name"]);
			}
		}
	}

	public function loadView(){
		$this->load->view("ui_login", $this->loginpage->components);
	}

}