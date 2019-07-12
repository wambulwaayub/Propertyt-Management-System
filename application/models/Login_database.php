<?php

Class Login_Database extends CI_Model {

	// Insert registration data in database
	public function registration_insert($data){

		// Query to check whether username already exist or not
		$condition = "user_name =" . "'" . $data['user_name'] . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			// Query to insert data in database
			$this->db->insert('user_login', $data);
			if ($this->db->affected_rows() > 0){
				return true;
			}
		}
		else {
			return false;
		}
	}
	public function proprietor_registration_insert($proprietor_data){

		// Query to check whether username already exist or not
		$condition = "p_email =" . "'" . $proprietor_data['p_email'] . "'";
		$this->db->select('*');
		$this->db->from('proprietor');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			// Query to insert data in database
			$this->db->insert('proprietor', $proprietor_data);
			if ($this->db->affected_rows() > 0){
				return true;
			}
		}
		else {
			return false;
		}
	}

	// Read data using username and password
	public function login($data) {

		$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1){
			return true;
		}
		else {
			return false;
		}
	}

// Read data from database to show data in admin page
public function read_user_information($username) {

	$condition = "user_name =" . "'" . $username . "'";
	$this->db->select('*');
	$this->db->from('user_login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1) {
	return $query->result();
	} else {
		return false;
	}
	}
	public function addIndividual($data){
		$this->db->insert('resident', $data);
	}
	public function checkPasswordMatch($email){
		$this->db->select('user_password');
		$this->db->where('user_name',$email);
		return $this->db->get('user_login')->result();
	}
	public function changePassword($new_password,$email){
		$this->db->where('user_name', $email)
	    		->update('user_login', array('user_password' => $new_password));
	    return true;
	}
}

?>
