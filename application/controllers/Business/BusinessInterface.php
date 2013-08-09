<?php
interface BusinessInterface{
	
	public function assignValues();
	
	public function setAttr($component, $attr, $val);
	
	public function getAttr($component, $attr);
}