<?php
class Users_mode extends CI_Model {

	public function getUsers(){
		$query = $this->db->get('users');
		return $query->result();
	}


}


?>
