<?php
	class product_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function loadAllCategory(){
			$result = $this->db->query("SELECT * FROM kategori");
			return $result->result_array();
		}
		public function insertBarang($data){
			$this->db->insert('barang',$data);
		}
	}
?>