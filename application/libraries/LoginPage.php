<?php
include "application/libraries/components/ComponentPaths.php";

class LoginPage{

	public $components;

	public function __construct(){
		$attr_title = array("value" => "TK Show Team");

		$attr_username = array("type"    => "text",
							   "name"    => "user",
							   "class"   => "login-inp");

		$attr_password = array("type"    => "password",
							   "name"    => "pass",
							   "class"   => "login-inp",
							   "value"   => "************",
							   "onfocus" => "this.value='';");

		$attr_remindMe = array("type"  => "checkbox",
							   "id"    => "login-check",
							   "name"  => "login-check",
							   "class" => "checkbox-size",
							   "label" => "Beni Hatırla");

		$attr_submit = array("type"   => "submit",
							 "name"   => "login",
							 "class"  => "submit-login",
							 "action" => "login/submit");

		$this->components->title = new OutputText($attr_title);
		$this->components->username = new Input($attr_username);
		$this->components->password = new Input($attr_password);
		$this->components->remindMe = new Input($attr_remindMe);
		$this->components->submit = new Input($attr_submit);
	}

	public function assignValues($input){
		foreach($this->components as $component){
			if(isset($component->attr['name'])){
				$component->attr["value"] = $input->post($component->attr["name"]);
			}
		}
	}
}