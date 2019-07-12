<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Property_m extends CI_Model{

// --RESIDENTS
	public function addPropertyResidential($data){
		$this->db->insert('property', $data);
	}
	public function addPropertyCommercial($data){
		$this->db->insert('property', $data);
	}
	function getPropertyTypeResidential(){
		$this->db->select('*');		
		return $this->db->get('residential_property_types')->result();
	}
	function getPropertyTypeCommercial(){
		$this->db->select('*');		
		return $this->db->get('commercial_property_types')->result();
	}
	function getPropertyID(){
		$this->db->select('prop_id');
		$this->db->order_by('auto_id','DESC');
		$this->db->limit(1);
		return $this->db->get('property')->result();
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
	public function getProperty($username,$id){
		if ($id<1){
			$this->db->select('*')
				->from('property')
				->where('prop_added_by',$username);
		}
		if ($id>0){
			#SELECT prop_id, prop_name, COUNT(unit_id) FROM units, property WHERE unit_block=prop_id
			$this->db->select('p.auto_id auto_id, prop_id, prop_type, prop_sub_type, prop_name, prop_floors, prop_custodian, prop_service_charge, prop_deposit_proportion, prop_rent, prop_location, prop_gprs, prop_added_by, prop_added_on, prop_units, count(unit_id) units, unit_floor') 
				->from('property p, units u')
				->where('unit_block=prop_id')
				// ->where('c.cust_id=prop_custodian')
				->where('p.auto_id',$id);

		}
		return $this->db->get()->result();
	}
	public function addUnits($insert_array){
		return $this->db->insert_batch('units', $insert_array);
	}
	public function updateUnitCount($generated_units,$unit_block_id){
		$this->db->where('prop_id',$unit_block_id)
	    		->update('property', array('prop_units' => $generated_units));
	    return true;
	}
	public function manageFloor($username,$id,$floor){
		if ($id<1){
			$this->db->select('*')
				->from('property')
				->where('prop_added_by',$username);
		}
		if ($id>0){
			$this->db->select('*') 
				->from('property p, units u')
				// ->where('unit_block=prop_id')
				->where('u.unit_floor',$floor)
				->where('p.auto_id',$id);

		}
		return $this->db->get()->result();
	}
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