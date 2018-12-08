<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class product_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('product_model');
			$this->load->library('session');
		}
		public function index(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$id = $_GET['id'];
			$result['barang'] = $this->product_model->infoBarang($id);
			$this->load->view('product',$result);
		}
	}
?>