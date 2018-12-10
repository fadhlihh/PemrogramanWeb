<?php
	class product_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		 public function barang_count() {
       		return $this->db->count_all("barang");
  		 }
		public function loadAllCategory(){
			$result = $this->db->query("SELECT * FROM kategori");
			return $result->result_array();
		}
		public function insertBarang($data){
			$this->db->insert('barang',$data);
		}
		public function showBarang($limit,$start){
			$result=$this->db->query("SELECT * FROM barang ORDER BY tanggal_jual DESC LIMIT $start, $limit");
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
		public function showBarangKategori($id,$limit,$start){
			$result=$this->db->query("SELECT * FROM barang WHERE id_kategori='$id' ORDER BY tanggal_jual DESC LIMIT $start, $limit");
			return $result->result_array();
		}
		public function show_user_barang($iden){
			$this->db->select('*');
			$this->db->from('barang');
			$this->db->where('Username',$iden);
			$this->db->order_by('tanggal_jual','DESC');
			$this->db->join('user', 'user.NPM = barang.NPM');
			$result = $this->db->get();
			return $result->result_array();
		}
		public function show_search_barang($data,$limit,$start){
			$result=$this->db->query("SELECT * FROM barang WHERE nama_barang LIKE '%".$data."%' ORDER BY tanggal_jual DESC LIMIT $start, $limit");
			return $result->result_array();
		}
		public function delete_barang($id){
			$this->db->where('id_barang', $id);
			$this->db->delete('barang');
		}
		public function update_barang($id,$data){
			$this->db->set('id_kategori', $data['id_kategori']);
			$this->db->set('nama_barang', $data['nama_barang']);
			$this->db->set('deskripsi', $data['deskripsi']);
			$this->db->set('harga', $data['harga']);
			$this->db->set('foto_barang1', $data['foto_barang1']);
			$this->db->set('foto_barang2', $data['foto_barang2']);
			$this->db->set('foto_barang3', $data['foto_barang3']);
			$this->db->set('foto_barang4', $data['foto_barang4']);
			$this->db->where('id_barang', $id);
			$this->db->update('barang');
		}
	}
?>