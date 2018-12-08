<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			$this->load->model('product_model');
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
			$result['kategori'] = $this->product_model->loadAllCategory();
			
			if($this->user_model->check_signin($pass,$iden)){
				$signin_status = array(
					'name' => $iden,
					'status' => TRUE
				);
				$this->session->set_userdata($signin_status);
				header("Location: ".base_url()."index.php/home");
			}else{
				$this->session->set_userdata('gagal','true');
				header("Location: ".base_url()."index.php/home");
			}
		}

		public function showuser(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->library('session');
			$result['user'] = $this->user_model->show_account($this->session->userdata('name'));
			$this->load->view('account',$result);
    	}

    	public function logout(){
    		$result['kategori'] = $this->product_model->loadAllCategory();
    		$this->load->library('session');
    		$this->session->unset_userdata('name');
    		$this->session->unset_userdata('NPM');
    		$this->session->unset_userdata('status');
    		header("Location: ".base_url()."index.php/home");
    	}

    	public function update_user(){
    		$result['kategori'] = $this->product_model->loadAllCategory();
    		$data = array( 
				'Username' => $this->input->post('username'),
				'Nama_Lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('hp'),
				'fakultas' => $this->input->post('fakultas'),
				'alamat' => $this->input->post('alamat')
			);
    		$this->user_model->update_data_user($this->session->userdata('name'),$data);
    		$this->session->set_userdata('name',$this->input->post('username'));
    		$this->showuser();
    	}

    	public function jualBarangPage(){
    		$result['kategori'] = $this->product_model->loadAllCategory();
    		$result['user'] = $this->user_model->show_account($this->session->userdata('name'));
    		$this->load->view('jual_barang',$result);
    	}
    	public function jualBarang(){
    		$result['kategori'] = $this->product_model->loadAllCategory();
    		$data = array(
				'NPM' => $this->input->post('NPM'), 
				'id_kategori' => $this->input->post('id_kategori'),
				'nama_barang' => $this->input->post('nama_barang'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga')
			);
    		$this->product_model->insertBarang($data);
    		$this->showuser();
    	}
	}
?>