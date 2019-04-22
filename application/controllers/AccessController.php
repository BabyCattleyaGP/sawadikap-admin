<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccessController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('login/login');
	}

	public function login(){
		$this->db->where('username', trim($_POST['username']));
		$this->db->where('password', md5(trim($_POST['password'])));
		$check = $this->db->get('admin');
		if($check->num_rows() > 0){
			foreach ($check->result() as $data) {
				$data_admin = array(
					'username_admin' => $data->username,
					'email_admin' => $data->email,
					'admin_logged_in' => true
				);
				$this->session->set_userdata($data_admin);
			}
			redirect(base_url('/'));
		}else{
			$this->session->set_flashdata('message_negative', 'Login failed! Please check your account and try again.');
			redirect(base_url('login'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
}
