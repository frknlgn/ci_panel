<?php
abstract class ComponentBase{

	public $attr;

	public function __construct($attr){
		$this->attr = $attr;
	}
	
	public abstract function getHtml();
}