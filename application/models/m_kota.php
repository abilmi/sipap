<?php
	class M_kota extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		function get_all_kota() {
			$query=$this->db->query("SELECT * FROM `kota` order by KOTA_KODE asc");
			return $query->result();
		}

		function get_id_kota(){
			$sql='SELECT KOTA_KODE + 1 as id FROM kota
					ORDER BY KOTA_KODE DESC
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

		function get_data_selected_kota($kota_kode){
			$sql='SELECT * from kota where KOTA_KODE ='.$kota_kode;
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

		function do_insert_kota($data) {
			$this->db->insert('kota', $data);
		}


		function do_edit_kota() {
			$kota_kode = $this->input->post('kota_kode');
			$data = array (
				'provinsi_kode' => $this->input->post('provinsi_kode'),
				'kota_nama' => $this->input->post('kota_nama')
			);
			$this->db->where('KOTA_KODE',$kota_kode);
			$this->db->update('kota',$data);
		}

		function do_delete_kota($kota_kode){
			$this->db->where('KOTA_KODE',$kota_kode);
			$this->db->delete('kota');
		}


	}
?>
