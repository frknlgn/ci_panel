<?php
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('cookie');
		//$this->load->library('session');
		echo get_cookie('pass');
	}
}