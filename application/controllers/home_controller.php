<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home_controller extends CI_Controller{
		public function index(){
			$this->load->view('home');
		}

		public function product(){
			$this->load->view('product');
		}

		public function contact(){
			$this->load->view('contact');
		}
	}
?>