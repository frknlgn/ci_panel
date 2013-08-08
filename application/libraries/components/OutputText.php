<?php

class OutputText extends ComponentBase{

	public function getHtml(){
		return isset($this->attr['value']) ? $this->attr['value'] : "";
	}
}