<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareerController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['data'] = "ini data";
		$data['user'] = $this->db->get('career')->result();
		$this->load->view('skins/header-table',$data);
		$this->load->view('career/index',$data);
		$this->load->view('skins/footer-table');
	}

	public function detail($id) {
		$data['data'] = $this->db->where('id',$id)->get('career')->result();
		$this->load->view('skins/header-table');
		$this->load->view('career/detail',$data);
		$this->load->view('skins/footer-table');
	}

	public function delete($id) {
		$this->db->where('id',$id)->delete('career');
		redirect('career');
	}

	public function create() {
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run() != false) {
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');

			$this->db->insert('career',$data);
			redirect('career');

		}else{
			$this->load->view('skins/header-table');
			$this->load->view('career/create');
			$this->load->view('skins/footer-table');
		}
	}

	public function edit($id) {
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run() != false) {
			$data['title'] = $this->input->post('title');
			$data['description'] = $this->input->post('description');

			$this->db->where('id',$id)->update('career',$data);
			redirect('product');

		}else{
			$data['id'] = $id;
			$data['data'] = $this->db->where('id',$id)->get('career')->result();
			$this->load->view('skins/header-table');
			$this->load->view('career/update',$data);
			$this->load->view('skins/footer-table');
		}
	}

}
