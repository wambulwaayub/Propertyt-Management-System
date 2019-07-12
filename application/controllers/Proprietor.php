<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Proprietor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_database');
		$this->load->model('proprietor_m');
		if (isset($this->session->userdata['logged_in'])){
			$this->username = $this->session->userdata['logged_in']['username'];
			$this->name = $this->session->userdata['logged_in']['name'];
			$this->email = ($this->session->userdata['logged_in']['email']);
			$this->load->view('proprietor/includes/header');
			} else {
			redirect('welcome');
		}
	}
	public function index()
	{
		$this->load->view('proprietor/index');	
	}
	public function addIndividual()
	{
		$f_name=$this->input->post('f_name');
		if(isset($f_name)){
			$data = array(
				'res_f_name' => $this->input->post('f_name'),
				'res_l_name' => $this->input->post('l_name'),
				'res_phone' => $this->input->post('phone'),
				'res_email' => $this->input->post('email'),
				'res_n_id' => $this->input->post('n_id'),
				'res_type' => "Individual",
				'res_added_by' => $this->input->post('added_by')
			);
			$this->proprietor_m->addIndividual($data);
			$message['message']="You have successfully added $f_name";
		}
		else{
			$message['message']="";
		}
		$this->load->view('proprietor/addIndividual',$message);
	}
	public function addCompany()
	{
		$c_name=$this->input->post('c_name');
		if(isset($c_name)){
			$data = array(
				'res_f_name' => $this->input->post('c_name'),
				'res_l_name' => " ",
				'res_phone' => $this->input->post('phone'),
				'res_email' => $this->input->post('email'),
				'res_n_id' => $this->input->post('n_id'),
				'res_type' => "Company",
				'res_added_by' => $this->input->post('added_by')
			);
			$this->proprietor_m->addCompany($data);
			$message['message']="You have successfully added $c_name";
		}
		else{
			$message['message']="";
		}
		$this->load->view('proprietor/addCompany',$message);
	}
	public function manageResidents()
	{
		$man_res_email=$this->input->post('man_res_email');
		$new_status=$this->input->post('new_status');
		$date1=$this->input->post('date1');
		$date2=$this->input->post('date2');
		$reason =$this->input->post('res_reason_for_status_change');
		$select_status=$this->input->post('select_status');
		$res_nok_name=$this->input->post('res_nok_name');
		$res_nok_phone=$this->input->post('res_nok_phone');
		$res_nok_relationship=$this->input->post('res_nok_relationship');
		$res_f_name = $this->input->post('res_f_name');
		$res_l_name = $this->input->post('res_l_name');
		$res_phone = $this->input->post('res_phone');
		$res_email = $this->input->post('res_email');
		$nothing = $this->input->post('nothing');
		$basic_part = $this->input->post('basic_part'); 
		$nok_part = $this->input->post('nok_part');
		$status_part = $this->input->post('status_part');
		$username=$this->username;
		// GET RESIDENTS
		// if(!empty($man_res_email)&!empty($nothing)){
		if($nothing=="nothing_part"){
			$res_details['resmail']=$man_res_email;
			$res_details['res_det']=$this->proprietor_m->manageResidents($man_res_email);
			$this->load->view('proprietor/manageSelectedResident',$res_details);
		}
		// RESIDENT STATUS
		elseif ($status_part=="status_part"){
			$res_details['resmail']=$man_res_email;
			if($this->proprietor_m->updateResidentStatus($man_res_email,$new_status,$reason)){
				$res_details['res_det']=$this->proprietor_m->manageResidents($man_res_email);
			}
			$this->load->view('proprietor/manageSelectedResident',$res_details);
		}
		// NEXT OF KIN
		elseif ($nok_part=="nok_part"){
			$res_details['resmail']=$man_res_email;
			if($this->proprietor_m->updateResidentNextOfKin($man_res_email,$res_nok_name,$res_nok_phone,$res_nok_relationship)){
				$res_details['res_det']=$this->proprietor_m->manageResidents($man_res_email);
			}
			$this->load->view('proprietor/manageSelectedResident',$res_details);
		}
		// BASIC DETAILS
		elseif ($basic_part=="basic_part"){
			$res_details['resmail']=$man_res_email;
			$res_details['res_det']=$this->proprietor_m->manageResidents($man_res_email);
			if($this->proprietor_m->updateResidentBasicDetails($man_res_email,$res_f_name,$res_l_name,$res_phone,$res_email)){
				$res_details['res_det']=$this->proprietor_m->manageResidents($man_res_email);
			}
			$this->load->view('proprietor/manageSelectedResident',$res_details);
		}
		else{
			if(empty($select_status)){
				$default_status="ALL <small>(without any filters)</small>";
			}
			if(empty($date1)){
				$residents['dates']=" ";
			}
			if(!empty($date1)){
				$residents['dates']=" added from $date1 to $date2";
			}
			$residents['selected_status']=$default_status;
			$residents['residents']=$this->proprietor_m->getResidents($username,$select_status,$date1,$date2);
			$this->load->view('proprietor/manageResidents',$residents);
		}
	}
	public function getResidents($id=0){
		$username = $this->username;
		if(current_url()>0){
			$id=basename(current_url());
		}
		// $id=echo basename(current_url());
		$residents['residents']=$this->proprietor_m->getResidents1($username,$id);
		$this->load->view('proprietor/manageResidents1',$residents);
		echo basename(current_url());
	}
	public function My_profile(){
		$email=$this->email;
		// PASSWORD 
		$new_password=$this->input->post('new_password');
		$new_password_again=$this->input->post('new_password_again');
		$cur_password=$this->input->post('cur_password');
		// DETAILS
		$postal_address=$this->input->post('postal_address');
		$alt_phone=$this->input->post('alt_phone');
		if(!empty($new_password)&!empty($new_password_again)&!empty($cur_password)){
			$check_password_match=$this->login_database->checkPasswordMatch($email);
			foreach ($check_password_match as $a) {
					$old_pass= $a->user_password;
				}
			if ($old_pass==$cur_password) {
				if ($new_password==$new_password_again) {
					if($this->login_database->changePassword($new_password,$email)){
						$my_profile['password_msg']="Password Changed Successfully";
					}
					else{
						$my_profile['password_msg']="Opps! Something wen't wrong! Please try again later";
					}
				}
				else{
					$my_profile['password_msg']="New Passwords Don't Match";
				}
			}
			else{
				$my_profile['password_msg']="Invalid Current Password";
			}
		}
		if (!empty($alt_phone)||!empty($postal_address)) {
			if($this->proprietor_m->updateProfileDetails($email,$alt_phone,$postal_address)){
				$my_profile['details_msg']="Profile Details Updated Succesfully";
			}
			else{
				$my_profile['details_msg']="Opps! Something Wen't wrong! Please try again later";
			}
		}
		$my_profile['my_profile']=$this->proprietor_m->My_profile($email);
		$this->load->view('proprietor/My_profile',$my_profile);
	}
}
