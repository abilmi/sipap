<?php
	class M_provinsi extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		function get_all_provinsi() {
			$query=$this->db->query("SELECT * FROM `provinsi` order by PROVINSI_KODE asc");
			return $query->result();
		}

		function get_id_provinsi(){
			$sql='SELECT PROVINSI_KODE + 1 as id FROM provinsi
					ORDER BY PROVINSI_KODE DESC
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

		function get_data_selected_provinsi($provisi_kode){
			$sql='SELECT * from provinsi where PROVINSI_KODE ='.$provisi_kode;
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

		function do_insert_provinsi($data) {
			$this->db->insert('provinsi', $data);
		}


		function do_edit_provinsi() {
			$provinsi_kode = $this->input->post('provinsi_kode');
			$data = array (
				'PROVINSI_NAMA' => $this->input->post('provinsi_nama')
			);
			$this->db->where('PROVINSI_KODE',$provinsi_kode);
			$this->db->update('provinsi',$data);
		}

		function do_delete_provinsi($provinsi_kode){
			$this->db->where('PROVINSI_KODE',$provinsi_kode);
			$this->db->delete('provinsi');
		}


	}
?>
