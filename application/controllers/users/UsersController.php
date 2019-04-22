<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		if(!is_logged_in()){
			redirect('login');
		}
	}

	public function index() {
		$data['data'] = "ini data";
		$data['user'] = $this->db->get('users')->result();
		$this->load->view('skins/header-table',$data);
		$this->load->view('users/index',$data);
		$this->load->view('skins/footer-table');
	}

	public function detail($id) {
		$data['data'] = $this->db->where('id',$id)->get('users')->result();
		$this->load->view('skins/header-table');
		$this->load->view('users/detail',$data);
		$this->load->view('skins/footer-table');
	}

	public function create() {
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('company','Company','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('fax','Fax','required');

		if($this->form_validation->run() != false) {
			$data['fname'] = $this->input->post('fname');
			$data['lname'] = $this->input->post('lname');
			$data['email'] = $this->input->post('email');
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = md5($this->input->post('password'));
			$data['company'] = $this->input->post('company');
			$data['city'] = $this->input->post('city');
			$data['address'] = $this->input->post('address');
			$data['phone'] = $this->input->post('phone');
			$data['fax'] = $this->input->post('fax');

			$insert = $this->db->insert('users',$data);
			if($insert){
				redirect('users');
			}
		}else{
			$data['data'] = "ini data";
			$this->load->view('skins/header-table',$data);
			$this->load->view('users/create');
			$this->load->view('skins/footer-table');
		}

	}

	public function update($id){
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('company','Company','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('fax','Fax','required');

		if($this->form_validation->run() != false){
			$data['fname'] = $this->input->post('fname');
			$data['lname'] = $this->input->post('lname');
			$data['email'] = $this->input->post('email');
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = md5($this->input->post('password'));
			$data['company'] = $this->input->post('company');
			$data['city'] = $this->input->post('city');
			$data['address'] = $this->input->post('address');
			$data['phone'] = $this->input->post('phone');
			$data['fax'] = $this->input->post('fax');

			if($this->db->where('id', $id)->update('users', $data)){
				redirect('users');
			}
		}else{
			$data['id'] = $id;
			$data['data'] = $this->db->where('id', $id)->get('users')->result();
			$this->load->view('skins/header-table');
			$this->load->view('users/update', $data);
			$this->load->view('skins/footer-table');
		}
	}

	public function delete($id){
		if($this->db->where('id', $id)->delete('users')){
			redirect('users');
		}
	}


}
