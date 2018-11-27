<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		public function index(){
			$data = array(
				'NPM' => $this->input->post('npm'), 
				'Username' => $this->input->post('username'),
				'Nama_Lengkap' => $this->input->post('nama_lengkap'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('nohp'),
				'tanggal_Bergabung' => date('Y-m-d H:i:s')
			);
			$this->user_model->insert_signup($data);
			$this->load->view('home');
		}
	}
?>