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
		$data['user'] = $this->db->get('tbl_user')->result();
		$this->load->view('skins/header-table',$data);
		$this->load->view('users/index',$data);
		$this->load->view('skins/footer-table');
	}

	public function detail($id) {
		$data['data'] = $this->db->where('id_user',$id)->get('tbl_user')->result();
		$this->load->view('skins/header-table');
		$this->load->view('users/detail',$data);
		$this->load->view('skins/footer-table');
	}

	public function delete($id){
		if($this->db->where('id_user', $id)->delete('tbl_user')){
			redirect('users');
		}
	}

}
