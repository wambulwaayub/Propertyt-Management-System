<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Property extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_database');
		$this->load->model('property_m');
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
	public function addPropertyResidential()
	{
		$username=$this->username; $id=0;
		$message['prop_type']=$this->property_m->getPropertyTypeResidential();
		$message['custodians']=$this->proprietor_m->getCustodians($username,$id);
		$property_id=$this->property_m->getPropertyID();		
		$name=$this->input->post('name');
		if(isset($name)){
			foreach ($property_id as $property_id) {
				$str = $property_id->prop_id;
				$new_property_id=++$str;
			}
			$data = array(
				'prop_id' => $new_property_id,
				'prop_name' => $this->input->post('name'),
				'prop_type' => 'Residential',
				'prop_sub_type' => $this->input->post('type'),
				'prop_floors' => $this->input->post('floors'),
				'prop_custodian' => $this->input->post('custodian'), 
				'prop_service_charge' => $this->input->post('service_charges'),
				'prop_deposit_proportion' => $this->input->post('deposit_proportion'),
				'prop_location' => $this->input->post('location'),
				'prop_gprs' => $this->input->post('gprs'),
				'prop_added_by' => $this->username
			);
			if($this->property_m->addPropertyResidential($data)){
				$message['message']="Successfully added. Property ID is $new_property_id";
			}
			else{
			$message['message']="Successfully added. Property ID is $new_property_id";
		}
	}
		$this->load->view('property/addResidential',$message);
}
	public function addPropertyCommercial()
	{
		$username=$this->username; $id=0;
		$message['prop_type']=$this->property_m->getPropertyTypeCommercial();
		$message['custodians']=$this->proprietor_m->getCustodians($username,$id);
		$property_id=$this->property_m->getPropertyID();		
		$name=$this->input->post('name');
		if(isset($name)){
			foreach ($property_id as $property_id) {
				$str = $property_id->prop_id;
				$new_property_id=++$str;
			}
			$data = array(
				'prop_id' => $new_property_id,
				'prop_name' => $this->input->post('name'),
				'prop_type' => 'Commercial',
				'prop_sub_type' => $this->input->post('type'),
				'prop_floors' => $this->input->post('floors'),
				'prop_custodian' => $this->input->post('custodian'), 
				'prop_service_charge' => $this->input->post('service_charges'),
				'prop_deposit_proportion' => $this->input->post('deposit_proportion'),
				'prop_location' => $this->input->post('location'),
				'prop_gprs' => $this->input->post('gprs'),
				'prop_added_by' => $this->username
			);
			if($this->property_m->addPropertyCommercial($data)){
				$message['message']="Successfully added. Property ID is $new_property_id";
			}
			else{
			$message['message']="Successfully added. Property ID is $new_property_id";
		}
	}
		$this->load->view('property/addCommercial',$message);
}
	public function getProperty($id=0){
		$username = $this->username;
		if(current_url()>0){
			$id=basename(current_url());
		}
		// $id=echo basename(current_url());
		$property['property']=$this->property_m->getProperty($username,$id);
		if($id>0){
			$this->load->view('property/manageSelectedProperty',$property);
		}
		else {
			$this->load->view('property/getProperty',$property);
		}
		// echo basename(current_url());
	}
	public function addUnits($id=0){
		$username = $this->username;
		$id=$this->uri->segment($this->uri->total_segments()-1);
		$floor=$this->uri->segment($this->uri->total_segments());
		// $units=$this->uri->segment($this->uri->total_segments());
		$property['property']=$this->property_m->getProperty($username,$id);
		if($id>0){
			$property['floor']=$floor;
			$units=$this->input->post('units');
			$rent=$this->input->post('rent');
			$unit_id=$this->input->post('unit_id');
			$unit_type=$this->input->post('unit_type');
			$unit_rent=$this->input->post('unit_rent');
			$unit_acc_no=$this->input->post('unit_acc_no');
			$unit_kplc_meter_no=$this->input->post('unit_kplc_meter_no');
			$unit_water_metre_no=$this->input->post('unit_water_metre_no');
			$generated_units=$this->input->post('generated_units');
			$unit_block_id=$this->input->post('block_id');
			$insert_array = array();
			for ($i=0; $i < count($unit_acc_no); $i++) {
                $tmp = array();
                $tmp['unit_added_by'] = $username;
                $tmp['unit_floor'] = $floor;
                $tmp['unit_block'] = $unit_block_id;
                $tmp['unit_id'] = $unit_id[$i];
                $tmp['unit_type'] = $unit_type[$i];
                $tmp['unit_rent'] = $unit_rent[$i];
                $tmp['unit_acc_no'] = $unit_acc_no[$i];
                $tmp['unit_kplc_meter_no'] = $unit_kplc_meter_no[$i];
                $tmp['unit_water_metre_no'] =$unit_water_metre_no[$i];
                $insert_array[] = $tmp;
            }
			if ($units>0&empty($unit_rent)){
				$property['units']=$units;
				$property['rent']=$rent;
			}
			if ($unit_rent>0) {
			    $this->property_m->addUnits($insert_array);
			    echo $generated_units;
			    $this->property_m->updateUnitCount($generated_units,$unit_block_id);

			}

			$this->load->view('property/addUnit',$property);
		}
		else {
			$this->load->view('property/getProperty',$property);
		}
		echo '$id='.$id.' $floor= '.$floor.' $units= '.$units;

	}
	public function manageFloor($id=0){
		$username = $this->username;
		$id=$this->uri->segment($this->uri->total_segments()-1);
		$floor=$this->uri->segment($this->uri->total_segments());
		$property['property']=$this->property_m->getProperty($username,$id);
		$property['units']=$this->property_m->manageFloor($username,$id,$floor);
		if($id>0){
			$property['floor']=$floor;
		$this->load->view('property/manageFloor',$property);
		}
		else {
			$this->load->view('property/getProperty',$property);
		}

	}
}
