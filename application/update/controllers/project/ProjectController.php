<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['data'] = "ini data";
		$data['user'] = $this->db->get('project')->result();
		$this->load->view('skins/header-table',$data);
		$this->load->view('project/index',$data);
		$this->load->view('skins/footer-table');
	}

	public function detail($id) {
		$data['data'] = $this->db->where('id',$id)->get('project')->result();
		$this->load->view('skins/header-table');
		$this->load->view('project/detail',$data);
		$this->load->view('skins/footer-table');
	}

	public function delete($id) {
		$this->db->where('id',$id)->delete('project');
		redirect('project');
	}

	public function create() {
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run() != false) {
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');

			$insert = $this->db->insert('project',$data);
			if($insert) {
				$id_product = $this->db->select('id')->from('project')->where($data)->get()->result();
				$this->upload($id_product[0]->id);
				redirect('project');
			}

		}else{
			$data['data'] = "ini data";
			$this->load->view('skins/header-table',$data);
			$this->load->view('project/create');
			$this->load->view('skins/footer-table');
		}
	}

	public function edit($id) {
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run() != false) {
			$data['name'] = $this->input->post('name');
			$data['description'] = $this->input->post('description');

			$insert = $this->db->where('id',$id)->update('project',$data);
			if($insert) {
				$this->edit_upload($id);
				redirect('project');
			}

		}else{
			$data['id'] = $id;
			$data['data'] = $this->db->where('id',$id)->get('project')->result();
			$this->load->view('skins/header-table');
			$this->load->view('project/update',$data);
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
				$data['img'] = $fileData['file_name'];
				$this->db->where('id',$id)->update('project',$data);
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
				$data['img'] = $fileData['file_name'];
				$this->db->where('id',$id)->update('project',$data);
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
