<?php
class OutputText{
	
	public $attr;
	
	public function __construct($attr){
		$this->attr = $attr;
	}

	public function getHtml(){
		return $this->attr["value"];
	}
}