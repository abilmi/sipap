<?php
	class M_user extends CI_Model {

		public function __construct() {
			$this->load->database();

		}

		/* view all user */
		function get_all_user() {
			$query=$this->db->query(
				"SELECT * FROM `user` WHERE 1
					order by user_kode asc");
			return $query->result();
		}

		/* insert new user*/
		function do_insert_new_user($data) {
			/*
			$query=$this->db->query("INSERT INTO `user` 
				(`USER_KODE`, `USER_NAMA`, `NIP`, `NUPTK`");
			return $query->result();
			*/
			$this->db->insert('user', $data);
		}

		/* view user selected to edit*/
		function edit_selected_user($user_kode) {
				$this->db->where('USER_KODE',$user_kode);
				$query = $this->db->get('user');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}

		/* edit user selected*/
		function do_edit_selected_user() {
			$user_kode = $this->input->post('user_kode');
			$data = array (
				'USER_NAMA' => $this->input->post('user_nama'),
				'NIP' => $this->input->post('nip'),
				'NUPTK' => $this->input->post('nuptk')
			);
			$this->db->where('USER_KODE',$user_kode);
			$this->db->update('user',$data);
		}

		/* delete user seleted */
		function delete_user_seleted($user_kode){
			$this->db->where('USER_KODE',$user_kode);
			$this->db->delete('user');
		}

		/* get ID user*/
		function get_id_user(){
			$sql='SELECT USER_KODE + 1 as id FROM user
					ORDER BY USER_KODE DESC
					LIMIT 1';
			$query = $this->db->query($sql);
			 if($query->num_rows() >0 )
			{
				$data=$query->result_array();
				return $data;
			}
			else
			{
				return false;
			}
		}

		function get_data_selected_user($user_kode){
			$sql='SELECT * from user where USER_KODE ='.$user_kode;
			$query = $this->db->query($sql);
				 if($query->num_rows() >0 )
				{
					$data=$query->result_array();
					return $data[0];
				}
				else
				{
					return false;
				}
		}
	}
?>
