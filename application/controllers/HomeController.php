<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');

		if(!is_logged_in()){
			redirect('login');
		}
	}

	public function index()
    {
    	$data['getTotal'] = $this->db->query('select count(id_user) as total_user, (select count(id_pakaian) as total_product from tbl_pakaian) as total_product from tbl_user')->result();

        $query = $this->db->query("SELECT SUM(total_order) as count, MONTH(time) as month FROM orders where YEAR(`time`) = YEAR(CURDATE())
            GROUP BY MONTH(time) ORDER BY time"); 
		$data['data'] = $query->result();
		
		$query = $this->db->query("SELECT SUM(total_order) as count, MONTH(time) as month FROM orders where YEAR(`time`) = YEAR(CURDATE()) - 1
            GROUP BY MONTH(time) ORDER BY time"); 
		$data['data2'] = $query->result();
		
		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '01' AND '01' GROUP BY id_product");
		$data['order1'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '02' AND '02' GROUP BY id_product");
		$data['order2'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '03' AND '03' GROUP BY id_product");
		$data['order3'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '04' AND '04' GROUP BY id_product");
		$data['order4'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '05' AND '05' GROUP BY id_product");
		$data['order5'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '06' AND '06' GROUP BY id_product");
		$data['order6'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '07' AND '07' GROUP BY id_product");
		$data['order7'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '08' AND '08' GROUP BY id_product");
		$data['order8'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '09' AND '09' GROUP BY id_product");
		$data['order9'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '10' AND '10' GROUP BY id_product");
		$data['order10'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '11' AND '11' GROUP BY id_product");
		$data['order11'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) AND MONTH(`time`) BETWEEN '12' AND '12' GROUP BY id_product");
		$data['order12'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '01' AND '01' GROUP BY id_product");
		$data['order13'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '02' AND '02' GROUP BY id_product");
		$data['order14'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '03' AND '03' GROUP BY id_product");
		$data['order15'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '04' AND '04' GROUP BY id_product");
		$data['order16'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '05' AND '05' GROUP BY id_product");
		$data['order17'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '06' AND '06' GROUP BY id_product");
		$data['order18'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '07' AND '07' GROUP BY id_product");
		$data['order19'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '08' AND '08' GROUP BY id_product");
		$data['order20'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '09' AND '09' GROUP BY id_product");
		$data['order21'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '10' AND '10' GROUP BY id_product");
		$data['order22'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '11' AND '11' GROUP BY id_product");
		$data['order23'] = $query->result();

		$query = $this->db->query("SELECT id_product, SUM(jml_order) AS jml_order FROM ordered where YEAR(`time`) = YEAR(CURDATE()) - 1 AND MONTH(`time`) BETWEEN '12' AND '12' GROUP BY id_product");
		$data['order24'] = $query->result();

        $this->load->view('skins/header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('skins/footer');
	}
}