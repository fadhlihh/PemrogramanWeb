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

		public function show_account($iden){
			$result=$this->db->query("SELECT * FROM user WHERE Username = '".$iden."'");
			return $result->result_array();
		}

		public function update_data_user($npm){
			$this->db->set('');
		}
	}
?>