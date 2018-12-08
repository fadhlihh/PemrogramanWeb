<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('product_model');
			$this->load->library('session');
		}
		public function index(){
			$this->load->library('session');
			if($this->session->userdata('gagal') == 'true'){
				echo "<script type='text/javascript'>alert('Password/username salah');</script>";
				$this->session->unset_userdata('gagal');
			}
			$result['kategori'] = $this->product_model->loadAllCategory();
			$result['barang'] = $this->product_model->showBarang();
			$this->load->view('home',$result);
		}

		public function contact(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->view('contact',$result);
		}
	}
?>