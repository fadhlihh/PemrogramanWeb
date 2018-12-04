<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('product_model');
		}
		public function index(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->view('home',$result);
		}
		
		public function product(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->view('product',$result);
		}

		public function contact(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->view('contact',$result);
		}
	}
?>