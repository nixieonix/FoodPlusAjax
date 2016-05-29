<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class product extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_access', 'prod');
	}

	function index() {
		$data['row'] = $this->prod->getproduct();
		$this->load->view('index', $data);
	}

	function add(){
		$this->load->view('add');
	}

	function ajax_check() {
		if($this->input->post('ajax') == '1') {
			
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');
			$this->form_validation->set_rules('production_date', 'production_date', 'required');
			$this->form_validation->set_rules('expiry_date', 'expiry_date', 'required');
			$this->form_validation->set_rules('price', 'price', 'required');
			$this->form_validation->set_rules('currency', 'currency', 'required');
			$this->form_validation->set_rules('ean_code', 'ean_code', 'required');
			$this->form_validation->set_rules('weight', 'weight', 'required');
			$this->form_validation->set_rules('weight_unit', 'weight_unit', 'required');

			
			if($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {

				$data=array(
					'name'=>$this->input->post('name'),
					'description'=>$this->input->post('description'),
					'production_date'=>$this->input->post('production_date'),
					'expiry_date'=>$this->input->post('expiry_date'),
					'price'=>$this->input->post('price'),
					'currency'=>$this->input->post('currency'),
					'ean_code'=>$this->input->post('ean_code'),
					'weight'=>$this->input->post('weight'),
					'weight_unit'=>$this->input->post('weight_unit')
				);

				$this->db->insert('products', $data);

				/*$this->load->model('m_access');
				$user = $this->m_access->insert($this->input->post('username'),$this->input->post('password'));*/
				
				if($data == true) {
					echo 'login successful';
				} else {
					echo 'unknown user';
				}
			}
		}
	}
}