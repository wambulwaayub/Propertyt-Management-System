<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Proprietor_m extends CI_Model{

// --RESIDENTS
	public function addIndividual($data){
		$this->db->insert('resident', $data);
	}
	public function addCompany($data){
		$this->db->insert('resident', $data);
	}
	function getResidents($username,$select_status,$date1,$date2){
		// BY DATE ALONE
		if(!empty($date1)&!empty($date2)&empty($select_status)){
			$this->db->select('*')
				->where('res_added_by',$username)
				->where('DATE(res_added_on)>=',DATE($date1))
				->where('DATE(res_added_on)<=',DATE($date2));
		}
		// BY STATUS ALONE
		elseif (empty($date1)&empty($date2)&!empty($select_status)){
			$this->db->select('*')
				->where('res_added_by',$username)
				->where('res_status',$select_status);
		}
		// BY DATE AND STATUS
		elseif (!empty($date1)&!empty($date2)&!empty($select_status)){
			$this->db->select('*')
				->where('res_added_by',$username)
				->where('DATE(res_added_on)>=',DATE($date1))
				->where('DATE(res_added_on)<=',DATE($date2))
				->where('res_status',$select_status);
		}
		// DISPLAY ALL
		else{
			$this->db->select('*')
				->where('res_added_by',$username);
		}
		
		return $this->db->get('resident')->result();
	}
	function getResidents1($username,$id){
			$this->db->select('*')
				->where('res_id',$id)
				->where('res_added_by',$username);
		
		return $this->db->get('resident')->result();
	}
	function getActiveResidents($username){
		$this->db->select('*')
				->where('res_added_by',$username)
				->where('res_status','ACTIVE');
		return $this->db->get('resident')->result();
	}
	function getInactiveResidents($username){
		$this->db->select('*');
		$this->db->where('res_added_by',$username);
		$this->db->where('res_status','INACTIVE');
		return $this->db->get('resident')->result();
	}
	function getTerminatedResidents($username){
		$this->db->select('*');
		$this->db->where('res_added_by',$username);
		$this->db->where('res_status','TERMINATED');
		return $this->db->get('resident')->result();
	}
	public function manageResidents($man_res_email){
		$this->db->select('res_email, res_phone, res_f_name, res_l_name, res_status, res_n_id, res_type, res_added_by, res_added_on, res_reason_for_status_change reason, res_nok_name, res_nok_phone, res_nok_relationship')
				->from('resident')
				->where('res_n_id',$man_res_email);
		return $this->db->get()->result();
	}
	public function updateResidentNextOfKin($man_res_email,$res_nok_name,$res_nok_phone,$res_nok_relationship){
		$this->db->where('res_n_id', $man_res_email);
	    $this->db->update('resident', array('res_nok_relationship' => $res_nok_relationship, 'res_nok_name' => $res_nok_name, 'res_nok_phone' => $res_nok_phone));
	    return true;
	}
	public function updateResidentBasicDetails($man_res_email,$res_f_name,$res_l_name,$res_phone,$res_email){
		$this->db->where('res_n_id', $man_res_email);
		// res_email res_f_name res_l_name res_phone
	    $this->db->update('resident', array('res_f_name' => $res_f_name, 'res_l_name' => $res_l_name, 'res_phone' => $res_phone, 'res_email' => $res_email));
	    if($this->db->affected_rows() >=0){
		  return "IKO SAWA"; //add your code here
		}else{
		  return "IMEKATAA"; //add your your code here
		}
	    // return true;
	}
	public function updateResidentStatus($man_res_email,$new_status,$reason){
		$this->db->where('res_n_id', $man_res_email);
	    $this->db->update('resident', array('res_status' => $new_status, 'res_reason_for_status_change' => $reason));
	    return true;
	}
// MY PROFILE
	public function My_profile($email){
		$this->db->select('p_nid_incorp_cert nid, p_kra_pin kra, p_phone phone, p_is_active active, p_is_paid paid, p_type type, date(p_added_on) added_on, p_postal_address, p_alt_phone');
		$this->db->where('p_email',$email);
		return $this->db->get('proprietor')->result();
	}
	public function updateProfileDetails($email,$alt_phone,$postal_address){
		$this->db->where('p_email', $email)
	    		->update('proprietor', array('p_alt_phone' => $alt_phone, 'p_postal_address' => $postal_address));
	    return true;
	}	
// --PROPERTIES


// --CUSTODIANS
	public function addCustodian($data){
		$this->db->insert('custodian', $data);
	}
	public function getCustodians($username,$id){
		if ($id<1){
			$this->db->select('*')
				->from('custodian')
				->where('cust_added_by',$username);
		}
		if ($id>0){
			$this->db->select('*')
				->from('custodian c, property p')
				->where('c.cust_added_by',$username)
				->where('c.cust_id=prop_custodian')
				->where('c.cust_id',$id);

		}
		return $this->db->get()->result();
	}

}
?>