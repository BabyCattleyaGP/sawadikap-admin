<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('Pdf');
		if(!is_logged_in()){
			redirect('login');
		}
	}

	public function index() {
		$this->db->distinct();
		$this->db->select('p.*, c.fname, c.lname')
			     ->from('orders p')
     			 ->join('users c','p.id_user = c.id','left');

		$data['data'] = $this->db->get()->result();

		$this->load->view('skins/header-table',$data);
		$this->load->view('order/index',$data);
		$this->load->view('skins/footer-table');
	}

	public function detail($id) {
		//echo $id;
		$this->db->distinct();
		$this->db->select('p.*, c.fname, c.lname')
			     ->from('orders p')
				 ->join('users c','p.id_user = c.id','left');
		$this->db->where('p.id',$id);

		$data['data'] = $this->db->get()->result();

		//$data['data'] = $this->db->where('id',$id)->get('orders')->result();
		//$data['img'] = $this->db->where('id_product',$id)->get('img')->result();
		$this->load->view('skins/header-table');
		$this->load->view('order/detail',$data);
		$this->load->view('skins/footer-table');
	}

	public function send_mail($to_email, $mesg, $name){
		$from = "pcindonesia.career@gmail.com";
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_timeout' => '600',
			'smtp_user' => $from,
			'smtp_pass' => 'Adminpci123',
			'mailtype' => 'html',
			'newline' => '\r\n',
			'charset'=>'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->load->library('email', $config);
		//$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");

 		$this->email->from($from, 'PCI Indonesia');
		$this->email->to($to_email);
		$this->email->subject('Status Order');
		$this->email->message($mesg);
		$this->email->attach($_SERVER['DOCUMENT_ROOT'] . 'PO-PCI-'.$name);

		if($this->email->send()){
			$this->session->set_flashdata('notif_email', 'Success Send Email');
			redirect('order');
		}else{
			//echo $this->email->print_debugger();
			$this->session->set_flashdata('notif_email', 'Failed to sending email');
			redirect('order');
		}
	}

	public function invoice($id_user, $id_order){
		$a = $this->db->where('id', $id_user)->get('users')->result();
		
		$this->db->select('A.*');
		$this->db->from('ordered A');
		$this->db->join('orders B', 'A.id_order ='.$id_order.'');
		$this->db->where('B.status', '0');
		$this->db->where('A.id_user', $id_user);
		$this->db->distinct();
		$b = $this->db->get()->result();

		$getTotal = $this->db->query('select sum(distinct price*jml_order) as total_price from ordered A inner join orders B ON A.id_order = '.$id_order. ' where A.id_user = '.$id_user.' AND B.status=0' )->result();

		$data['data'] = $a;
		$data['order'] = $b;
		$data['totalorder'] = $getTotal;

		$this->load->view('order/invoice', $data);

		$mesg = $this->load->view('order/accept', $data, true);

		$to_email = $a[0]->email;
		$name = $b[0]->id_user.'-'.$b[0]->id.'.pdf';
		$data = array(
			'status' => 1
		);
		$this->db->where('id', $id_order)->update('orders', $data);
		$this->send_mail($to_email, $mesg, $name);
	}

 	public function reject($id_user, $id_order){
		$a = $this->db->where('id', $id_user)->get('users')->result();
		$data['data'] = $a;
		// $to_email = "bcattleya@gmail.com";
		$mesg = $this->load->view('order/reject', $data, true);
		$to_email = $a[0]->email;
		$name = '';
		$data = array(
			'status' => 2
		);
		$this->db->where('id', $id_order)->update('orders', $data);
		$this->send_mail($to_email, $mesg, $name);
	}
}
