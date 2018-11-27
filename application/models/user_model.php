<?php
	class user_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insert_signup($data){
			$this->db->insert('user',$data);
		}

		public function check_signin($pass,$iden){
			$this->db->from('user');
			$this->db->where('Username =', $iden);
			$this->db->where('password =', $pass);
			$result = $this->db->get();
			if($result->num_rows() > 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}
?>