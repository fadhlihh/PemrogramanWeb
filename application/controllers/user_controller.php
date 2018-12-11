<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			$this->load->model('product_model');
			date_default_timezone_set("Asia/Jakarta");
		}
		public function index(){
		}

		public function signup(){
			$result['kategori'] = $this->product_model->loadAllCategory();
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
			header("Location: ".base_url()."index.php/home");
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
				$this->user_model->lastLogin(date('Y-m-d H:i:s'),$this->session->userdata('name'));
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
			$file_type = $_FILES['foto_user']['type'];
			$allowed = array("image/jpeg", "image/gif", "image/png");
			if($file_type != NULL){
				if(!in_array($file_type,$allowed)) {
					$error_message = 'Only jpg, gif, and png files are allowed.';
					echo $error_message;
					exit();
				}
				$target_dir = "image_account/";
				$target_file = $target_dir . time().basename($_FILES["foto_user"]["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$imgName = time().basename($_FILES["foto_user"]["name"]);
				move_uploaded_file($_FILES["foto_user"]["tmp_name"], $target_file);
				$foto = array(
					'foto_user'=>$imgName
				);
				$this->user_model->update_photo($this->session->userdata('name'),$foto);
			}

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
			$target_dir = "image_product/";
			$file_type1 = $_FILES['foto1']['type'];
			$file_type2 = $_FILES['foto2']['type'];
			$file_type3 = $_FILES['foto3']['type'];
			$file_type4 = $_FILES['foto4']['type'];
			$imgName2 = NULL;
			$imgName3 = NULL;
			$imgName4 = NULL;
			$allowed = array("image/jpeg", "image/gif", "image/png");
			if(!in_array($file_type1,$allowed )) {
				$error_message = 'Only jpg, gif, and png files are allowed.';
				echo $error_message;
				exit();
			}
			$target_file1 = $target_dir . time().basename($_FILES["foto1"]["name"]);
			$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
			$imgName1 = time().basename($_FILES["foto1"]["name"]);
			move_uploaded_file($_FILES["foto1"]["tmp_name"], $target_file1);

			if($file_type2 != NULL ){
				if(!in_array($file_type2,$allowed )) {
					$error_message = 'Only jpg, gif, and png files are allowed.';
					echo $error_message;
					exit();
				}
				$target_file2 = $target_dir . time().basename($_FILES["foto2"]["name"]);
				$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
				$imgName2 = time().basename($_FILES["foto2"]["name"]);
				move_uploaded_file($_FILES["foto2"]["tmp_name"], $target_file2);
			}
			
			if($file_type3 != NULL){
				if(!in_array($file_type3,$allowed )) {
					$error_message = 'Only jpg, gif, and png files are allowed.';
					echo $error_message;
					exit();
				}
				$target_file3 = $target_dir . time().basename($_FILES["foto3"]["name"]);
				$imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
				$imgName3 = time().basename($_FILES["foto3"]["name"]);
				move_uploaded_file($_FILES["foto3"]["tmp_name"], $target_file3);
			}

			if($file_type4 != NULL){
				if(!in_array($file_type4,$allowed )) {
					$error_message = 'Only jpg, gif, and png files are allowed.';
					echo $error_message;
					exit();
				}
				$target_file4 = $target_dir . time().basename($_FILES["foto4"]["name"]);
				$imageFileType = pathinfo($target_file4,PATHINFO_EXTENSION);
				$imgName4 = time().basename($_FILES["foto4"]["name"]);
				move_uploaded_file($_FILES["foto4"]["tmp_name"], $target_file4);
			}			  
			
			
    		$result['kategori'] = $this->product_model->loadAllCategory();
    		$data = array(
				'NPM' => $this->input->post('NPM'), 
				'id_kategori' => $this->input->post('id_kategori'),
				'nama_barang' => $this->input->post('nama_barang'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga'),
				'foto_barang1'=>$imgName1,
				'foto_barang2'=>$imgName2,
				'foto_barang3'=>$imgName3,
				'foto_barang4'=>$imgName4,
				'tanggal_jual'=>date('Y-m-d H:i:s')
			);
    		$this->product_model->insertBarang($data);
    		$this->showuser();
		}
		public function list_barang(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$result['barang'] = $this->product_model->show_user_barang($this->session->userdata('name'));
			$this->load->view('list_barang',$result);
		}
	}
?>