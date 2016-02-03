<?php
	class M_penerima extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		function get_all_penerima() {
			$query=$this->db->query("SELECT `PENERIMA_KODE`, `KOTA_NAMA`, `PENERIMA_NAMA`, `PENERIMA_ALAMAT` FROM `penerima` 
			JOIN `kota`
			WHERE `kota`.KOTA_KODE = `penerima`.KOTA_KODE order by PENERIMA_KODE asc");
			return $query->result();
		}

		function get_id_penerima(){
			$sql='SELECT PENERIMA_KODE + 1 as id FROM penerima
					ORDER BY PENERIMA_KODE DESC
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

		function get_data_selected_penerima($penerima_kode){
			$sql='SELECT * from penerima where PENERIMA_KODE ='.$penerima_kode;
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

		function do_insert_penerima($data) {
			$this->db->insert('penerima', $data);
		}


		function do_edit_penerima() {
			$penerima_kode = $this->input->post('penerima_kode');
			$data = array (
				'KOTA_KODE' => $this->input->post('kota_kode'),
				'PENERIMA_NAMA' => $this->input->post('penerima_nama'),
				'PENERIMA_ALAMAT' => $this->input->post('penerima_alamat')
			);
			$this->db->where('PENERIMA_KODE',$penerima_kode);
			$this->db->update('penerima',$data);
		}

		function do_delete_penerima($penerima_kode){
			$this->db->where('PENERIMA_KODE',$penerima_kode);
			$this->db->delete('penerima');
		}


	}
?>
