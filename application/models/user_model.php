<?php
	class user_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert_signup($data){
			$this->db->insert('user',$data);
		}
	}
?>