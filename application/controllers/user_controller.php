<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		public function index(){
			
		}

		public function signup(){
			$data = array(
				'NPM' => $this->input->post('npm'), 
				'Username' => $this->input->post('username'),
				'Nama_Lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('nohp'),
				'tanggal_Bergabung' => date('Y-m-d H:i:s')
			);
			$this->user_model->insert_signup($data);
			$this->load->view('home');
		}

		public function signin(){
			$this->load->library('session');
			$iden = $this->input->post('username');
			$pass = $this->input->post('password');
			if($this->user_model->check_signin($pass,$iden)){
				$signin_status = array(
					'name' => $iden,
					'status' => TRUE
				);
				$this->session->set_userdata($signin_status);
				$this->load->view('home');
			}else{
				echo "<script type='text/javascript'>alert('Password/username salah');</script>";
				$this->load->view('home');
			}
		}

		public function showuser(){
			$result['data']=$this->user_model->show_account();
			if($result['data'] == false )
            	$result['data'] = array();            
			$this->load->view('account',$result);
    	}

    	public function logout(){
    		$this->load->library('session');
    		$this->session->unset_userdata('name');
    		$this->session->unset_userdata('status');
    		$this->load->view('home');
    	}
	}
?>