<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

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
		$data['user'] = $this->db->get('product')->result();
		$this->load->view('skins/header-table',$data);
		$this->load->view('product/index',$data);
		$this->load->view('skins/footer-table');
	}

	public function detail($id) {
		$data['data'] = $this->db->where('id',$id)->get('product')->result();
		$data['img'] = $this->db->where('id_product',$id)->get('img')->result();
		$this->load->view('skins/header-table');
		$this->load->view('product/detail',$data);
		$this->load->view('skins/footer-table');
	}

	public function delete($id) {
		$this->db->where('id',$id)->delete('product');
		redirect('product');
	}

	public function create() {
		$this->form_validation->set_rules('id','ID','required');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('length','Length','required');
		$this->form_validation->set_rules('strands','Strands','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('stock','Stock','required');

		if($this->form_validation->run() != false) {
			$data['id'] = $this->input->post('id');
			$data['name'] = $this->input->post('name');
			$data['type'] = $this->input->post('type');
			$data['length'] = $this->input->post('length');
			$data['strands'] = $this->input->post('strands');
			$data['price'] = $this->input->post('price');
			$data['stock'] = $this->input->post('stock');
			$data['time'] = date("Y-m-d H:i:s");

			$insert = $this->db->insert('product',$data);
			if($insert) {
				$id_product = $this->db->select('id')->from('product')->where($data)->get()->result();
				$this->upload($id_product[0]->id);
				redirect('product');
			}

		}else{
			$data['data'] = "ini data";
			$this->load->view('skins/header-table',$data);
			$this->load->view('product/create');
			$this->load->view('skins/footer-table');
		}
	}

	public function edit($id) {
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('length','Length','required');
		$this->form_validation->set_rules('strands','Strands','required');
		$this->form_validation->set_rules('price','Price','required');
		$this->form_validation->set_rules('stock','Stock','required');


		if($this->form_validation->run() != false) {
			$data['name'] = $this->input->post('name');
			$data['type'] = $this->input->post('type');
			$data['length'] = $this->input->post('length');
			$data['strands'] = $this->input->post('strands');
			$data['price'] = $this->input->post('price');
			$data['stock'] = $this->input->post('stock');

			$insert = $this->db->where('id',$id)->update('product',$data);
			if($insert) {
				$this->db->select('id')->from('product')->where('id',$id)->get()->result();
				$this->edit_upload($id);
				redirect('product');
			}

		}else{
			$data['id'] = $id;
			$data['data'] = $this->db->where('id',$id)->get('product')->result();
			$data['img'] = $this->db->where('id_product',$id)->get('img')->result();
			$this->load->view('skins/header-table');
			$this->load->view('product/update',$data);
			$this->load->view('skins/footer-table');
		}
	}

	function upload($id) {
		$filesCount = count($_FILES['image']['name']);
		for($i = 0; $i < $filesCount; $i++){
			$_FILES['file']['name']     = $_FILES['image']['name'][$i];
			$_FILES['file']['type']     = $_FILES['image']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['image']['error'][$i];
			$_FILES['file']['size']     = $_FILES['image']['size'][$i];

			// File upload configuration
			$uploadPath = 'assets/upload/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// Upload file to server
			if($this->upload->do_upload('file')){
				$fileData = $this->upload->data();
				$uploadData[$i]['file_name'] = $fileData['file_name'];
				$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
				$data['id_product'] = $id;
				$data['img'] = $fileData['file_name'];
				$this->db->insert('img',$data);
			}
		}
	}

	function edit_upload($id) {
		$filesCount = count($_FILES['image']['name']);
		if($filesCount == 0){
			$this->db->where('id_product',$id)->delete('img');
		}
		for($i = 0; $i < $filesCount; $i++){
			$_FILES['file']['name']     = $_FILES['image']['name'][$i];
			$_FILES['file']['type']     = $_FILES['image']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
			$_FILES['file']['error']     = $_FILES['image']['error'][$i];
			$_FILES['file']['size']     = $_FILES['image']['size'][$i];

			// File upload configuration
			$uploadPath = 'assets/upload/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// Upload file to server
			if($this->upload->do_upload('file')){
				$fileData = $this->upload->data();
				$uploadData[$i]['file_name'] = $fileData['file_name'];
				$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
				$data['id_product'] = $id;
				$data['img'] = $fileData['file_name'];
				$this->db->insert('img',$data);
			}
		}
	}

	function set_upload_options()
	{
		//upload an image options
		$config = array();
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite']     = FALSE;

		return $config;
	}
	
}
