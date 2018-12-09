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

		public function update_data_user($iden,$data){
			$this->db->set('Username', $data['Username']);
			$this->db->set('Nama_Lengkap', $data['Nama_Lengkap']);
			$this->db->set('email', $data['email']);
			$this->db->set('password', $data['password']);
			$this->db->set('no_hp', $data['no_hp']);
			$this->db->set('fakultas', $data['fakultas']);
			$this->db->set('alamat', $data['alamat']);
			$this->db->where('Username', $iden);
			$this->db->update('user');
		}

		public function update_photo($iden,$foto){
			$this->db->set('foto_User', $foto['foto_user']);
			$this->db->where('Username', $iden);
			$this->db->update('user');
		}
	}
?>