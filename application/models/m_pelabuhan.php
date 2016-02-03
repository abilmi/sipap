<?php
	class M_pelabuhan extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		function get_all_pelabuhan() {
			$query=$this->db->query("SELECT * FROM `pelabuhan` order by PELABUHAN_KODE asc");
			return $query->result();
		}

		function get_id_pelabuhan(){
			$sql='SELECT PELABUHAN_KODE + 1 as id FROM pelabuhan
					ORDER BY PELABUHAN_KODE DESC
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

		function get_data_selected_pelabuhan($pelabuhan_kode){
			$sql='SELECT * from pelabuhan where PELABUHAN_KODE ='.$pelabuhan_kode;
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

		function do_insert_pelabuhan($data) {
			$this->db->insert('pelabuhan', $data);
		}


		function do_edit_pelabuhan() {
			$pelabuhan_kode = $this->input->post('pelabuhan_kode');
			$data = array (
				'PELABUHAN_NAMA' => $this->input->post('pelabuhan_nama')
			);
			$this->db->where('PELABUHAN_NAMA',$pelabuhan_nama);
			$this->db->update('pelabuhan',$data);
		}

		function do_delete_pelabuhan($pelabuhan_kode){
			$this->db->where('PELABUHAN_KODE',$pelabuhan_kode);
			$this->db->delete('pelabuhan');
		}


	}
?>
