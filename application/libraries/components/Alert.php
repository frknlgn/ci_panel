<?php

class Alert extends ComponentBase{

	public function getHtml(){
		if($this->attr['status'] == "enable"){
			return "<script> $(document).ready(function(){ alert('".$this->attr['message']."'); }); </script>";
		}
		return "";		
	}
}