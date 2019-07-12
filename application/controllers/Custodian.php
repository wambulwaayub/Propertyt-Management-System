<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Custodian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_database');
		$this->load->model('proprietor_m');
		$this->load->model('property_m');
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
	public function addCustodian()
	{
		$cust_name=$this->input->post('cust_name');
		if(isset($cust_name)&!empty($cust_name)){
			$data = array(
				'cust_name' => $this->input->post('cust_name'),
				'cust_phone' => $this->input->post('cust_phone'),
				'cust_email' => $this->input->post('cust_email'),
				'cust_nid' => $this->input->post('cust_nid'),
				'cust_added_by' => $this->username
			);
			if ($this->proprietor_m->addCustodian($data)){
				$message['message']="Custodian Added Successfully";
			}
			else{
				// $message['message']="Oops! Something wen't wrong. If this persists, please notify us";
				$message['message']="";
			}
		}		
		$this->load->view('custodian/addCustodian',$message);
	}
	public function getCustodians($id=0){
		$username = $this->username;
		if(current_url()>0){
			$id=basename(current_url());			
		}
		$custodians['blocks']=$this->proprietor_m->getCustodians($username,$id);
		$custodians['custodians']=$this->proprietor_m->getCustodians($username,$id);
		if($id>0){
			$this->load->view('custodian/manageSelectedCustodian',$custodians);
		}
		else {
			$this->load->view('custodian/manageCustodians',$custodians);
		}
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
