<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$data['data'] = "ini data";
		$this->load->view('skins/header',$data);
		$this->load->view('dashboard/index');
		$this->load->view('skins/footer');
	}
}