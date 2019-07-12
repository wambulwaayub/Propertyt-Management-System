<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start(); //we need to start session in order to access it through CI

Class User_Authentication extends CI_Controller {

public function __construct() {
parent::__construct();
$this->load->model('login_database');
}

// Show login page
public function index() {
$this->load->view('auth_login');
}

// Show registration page
public function user_registration_show() {
	$this->load->view('auth_register');
}

// Validate and store registration data in database
public function new_user_registration(){

	// Check validation for user input in SignUp form
	// $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	// $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('auth_register');
	} else {
		$login_data = array(
			'user_name' => $this->input->post('email'),
			'user_email' => $this->input->post('email'),
			'user_password' => $this->input->post('password'),
			'name' => $this->input->post('name')
		);
		$proprietor_data  = array(
			'p_nid_incorp_cert' => $this->input->post('n_id'), 
			'p_kra_pin' => $this->input->post('kra'),
			'p_name' => $this->input->post('f_name')." ".$this->input->post('l_name'),
			'p_phone' => $this->input->post('phone'),
			'p_email' => $this->input->post('email'),
			'p_type' =>  'Individual'
		);
		$proprietor_result = $this->login_database->proprietor_registration_insert($proprietor_data);
		$result = $this->login_database->registration_insert($login_data);
		if ($result == TRUE) {
			$login_data['message_display'] = 'Registration Successfully !';
			$this->load->view('auth_login', $data);
		} else {
			$login_data['message_display'] = 'Email already exist!';
			$this->load->view('auth_register', $login_data);
		}
	}
}

// Check for user login process
public function user_login_process() {

$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
redirect('Proprietor');
}else{
$this->load->view('auth_login');
}
} else {
$data = array(
'username' => $this->input->post('username'),
'password' => $this->input->post('password')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {

$username = $this->input->post('username');
$result = $this->login_database->read_user_information($username);
if ($result != false) {
$session_data = array(
'username' => $result[0]->user_name,
'email' => $result[0]->user_email,
'name' => $result[0]->name,
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
// $this->load->view('proprietor/includes/header');
// $this->load->view('proprietor/index');
redirect('Proprietor');
}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('auth_login', $data);
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('auth_login', $data);
}

}

?>