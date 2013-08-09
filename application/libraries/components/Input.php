<?php

class Input extends ComponentBase{

	public function getHtml(){

		$html = '<input ';
		$html .= isset($this->attr['type']) ? 'type="'.$this->attr['type'].'" ' : '';
		$html .= isset($this->attr['id']) ? 'type="'.$this->attr['id'].'" ' : '';
		$html .= isset($this->attr['name']) ? 'name="'.$this->attr['name'].'" ' : '';
		$html .= isset($this->attr['class']) ? 'class="'.$this->attr['class'].'" ' : '';
		$html .= isset($this->attr['value']) ? 'value="'.$this->attr['value'].'" ' : '';
		if($this->attr['type'] == 'submit'){
			if(!isset($this->attr['onclick'])) $this->attr['onclick'] = '';
			$this->attr['onclick'] = $this->attr['onclick']." this.form.action = '".base_url().$this->attr["action"]."'; this.form.submit(); return false;";
		}
		$html .= isset($this->attr['onclick']) ? 'onclick="'.$this->attr['onclick'].'" ' : '';
		$html .= ' />';
		$html .= isset($this->attr['label']) ? '<label for="'.$this->attr['id'].'">'.$this->attr['label'].'</label>' : '';
		return $html;
	}
}