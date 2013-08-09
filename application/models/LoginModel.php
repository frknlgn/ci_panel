<?php
class LoginModel extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function checkAuthentication($condition){
		$query = $this->db->get_where('users', $condition);
		if($query->num_rows() > 0){
			return true;
		}
		return false;
	}
}