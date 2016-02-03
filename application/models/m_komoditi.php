<?php
	class M_komoditi extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		function get_all_komoditi() {
			$query=$this->db->query("SELECT * FROM `komoditi` order by KOMODITI_KODE asc");
			return $query->result();
		}

		function get_id_komoditi(){
			$sql='SELECT KOMODITI_KODE + 1 as id FROM komoditi
					ORDER BY KOMODITI_KODE DESC
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

		function get_data_selected_komoditi($komoditi_kode){
			$sql='SELECT * from komoditi where KOMODITI_KODE ='.$komoditi_kode;
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

		function do_insert_komoditi($data) {
			$this->db->insert('komoditi', $data);
		}


		function do_edit_komoditi() {
			$komoditi_kode = $this->input->post('komoditi_kode');
			$data = array (
				'KOMODITI_NAMA' => $this->input->post('komoditi_nama'),
				'KOMODITI_JENIS' => $this->input->post('komoditi_jenis'),
				'KOMODITI_ASAL' => $this->input->post('komoditi_asal'),
				'KOMODITI_BENTUK' => $this->input->post('komoditi_bentuk'),
				'SATUAN' => $this->input->post('satuan')
			);
			$this->db->where('KOMODITI_KODE',$komoditi_kode);
			$this->db->update('komoditi',$data);
		}

		function do_delete_komoditi($komoditi_kode){
			$this->db->where('KOMODITI_KODE',$komoditi_kode);
			$this->db->delete('komoditi');
		}


	}
?>
