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
		public function showBarang(){
			$result=$this->db->query("SELECT * FROM barang LIMIT 9");
			return $result->result_array();
		}
		public function infoBarang($id){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where('id_barang',$id);
			$this->db->join('user', 'user.NPM = barang.NPM');
			$result = $this->db->get();
			return $result->result_array();
		}
	}
?>