<?php
include "application/libraries/components/OutputText.php";

class LoginPage{

	public $components;

	function __construct(){
		$attr_title = array("value" => "TK Show Team");
		$this->components->title = new OutputText($attr_title);
	}
}