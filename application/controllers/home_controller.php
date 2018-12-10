<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('product_model');
			$this->load->library('session');
			$this->load->library("pagination");
		}
		public function index(){
			$this->load->library('session');
			if($this->session->userdata('gagal') == 'true'){
				echo "<script type='text/javascript'>alert('Password/username salah');</script>";
				$this->session->unset_userdata('gagal');
			}
			$result['kategori'] = $this->product_model->loadAllCategory();
			$config["base_url"] = base_url() . "index.php/home";
			$config["total_rows"] = $this->product_model->barang_count();
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
	    	$this->pagination->initialize($config);
	    	$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

			$result['barang'] = $this->product_model->showBarang($config["per_page"], $page);
			$result["links"] = $this->pagination->create_links();
			$this->load->view('home',$result);
		}

		public function contact(){
			$result['kategori'] = $this->product_model->loadAllCategory();
			$this->load->view('contact',$result);
		}
	}
?>