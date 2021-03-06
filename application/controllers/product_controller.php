<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class product_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('product_model');
			$this->load->library('session');
			$this->load->library("pagination");
			date_default_timezone_set("Asia/Jakarta");
		}
		public function index(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$id = $_GET['id'];
			$result['barang'] = $this->product_model->infoBarang($id);
			$this->load->view('product',$result);
		}
		public function kategori(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$id = $_GET['id'];
			$config["base_url"] = base_url() . "index.php/kategori";
			$config["total_rows"] = $this->product_model->kategori_count($id);
	    	$config["per_page"] = 9;
	    	$config["uri_segment"] = 2;
	    	$config["next_link"] = "NEXT";
	    	$config["prev_link"] = "PREV";
	    	$config["first_link"] = "First";
	    	$config["last_link"] = "Last";
	    	$config["full_tag_open"] = "<div class='page'>";
	    	$config["full_tag_close"] = "</div>";
	    	$config["prev_tag_open"] = "<b class='prev_page'>";
	    	$config["prev_tag_close"] = "</b>";
	    	$config["next_tag_open"] = "<b class='next_page'>";
	    	$config["next_tag_close"] = "</b>";
	    	$config["cur_tag_open"] = "<b class='current_page'>";
	    	$config["cur_tag_close"] = "</b>";
	    	$config["num_tag_open"] = "<b class='num_page'>";
	    	$config["num_tag_close"] = "</b>";
	    	$config["last_tag_open"] = "<b class='last_page'>";
	    	$config["last_tag_close"] = "</b>";
	    	$config["first_tag_open"] = "<b class='next_page'>";
	    	$config["first_tag_close"] = "</b>";
	    	$config['reuse_query_string'] = TRUE;
	    	$this->pagination->initialize($config);
	    	$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$result['barang'] = $this->product_model->showBarangKategori($id,$config["per_page"],$page);
			$result["links"] = $this->pagination->create_links();
			$this->load->view('home',$result);
		}
		public function search(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$config["base_url"] = base_url() . "index.php/search";
			$config["total_rows"] = $this->product_model->search_count($this->input->get('search'));
	    	$config["per_page"] = 9;
	    	$config["uri_segment"] = 2;
	    	$config["next_link"] = "NEXT";
	    	$config["prev_link"] = "PREV";
	    	$config["first_link"] = "First";
	    	$config["last_link"] = "Last";
	    	$config["full_tag_open"] = "<div class='page'>";
	    	$config["full_tag_close"] = "</div>";
	    	$config["prev_tag_open"] = "<b class='prev_page'>";
	    	$config["prev_tag_close"] = "</b>";
	    	$config["next_tag_open"] = "<b class='next_page'>";
	    	$config["next_tag_close"] = "</b>";
	    	$config["cur_tag_open"] = "<b class='current_page'>";
	    	$config["cur_tag_close"] = "</b>";
	    	$config["num_tag_open"] = "<b class='num_page'>";
	    	$config["num_tag_close"] = "</b>";
	    	$config["last_tag_open"] = "<b class='last_page'>";
	    	$config["last_tag_close"] = "</b>";
	    	$config["first_tag_open"] = "<b class='next_page'>";
	    	$config["first_tag_close"] = "</b>";
	    	$config['reuse_query_string'] = TRUE;
	    	$this->pagination->initialize($config);
	    	$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$result['barang'] = $this->product_model->show_search_barang($this->input->get('search'),$config["per_page"],$page);
			$result["links"] = $this->pagination->create_links();
			$this->load->view('home',$result);
		}
		public function deleteBarang(){
			$id = $_GET['id'];
			$this->product_model->delete_barang($id);
			header("Location: ".base_url()."index.php/list-barang");
		}

		public function editBarang(){
			$id = $_GET['id'];
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->library('session');
			$result['barang'] = $this->product_model->infoBarang($id);
			$this->load->view('edit_barang',$result);
		}
		
		public function updateBarang(){
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
			
			$id = $_GET['id'];
    		$result['kategori'] = $this->product_model->loadAllCategory();
    		$data = array(
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
			$this->product_model->update_barang($id,$data);
			header("Location: ".base_url()."index.php/list-barang");
		}
	}
?>