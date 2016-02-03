<?php
	class Report_model extends CI_Model {

		public function __construct() {
			$this->load->database('db');

		}

		function get_all_data_transaksi($tahun, $bulan)
		{
			$sql="Select k.KOMODITI_NAMA 'Komoditi', tp.TITIK_PANTAU_NAMA, 
			tujuan.Tujuan, p.PELABUHAN_NAMA , pn.PENERIMA_NAMA, 
			case(tr.AKTIVITAS) when '1' then 'Bongkar' when '2' then 'Muat' END as Aktivitas, 
			tr.NAMA_KAPAL, tr.WAKTU_TIBA, tr.WAKTU_BERANGKAT, tr.QUANTITY, tr.NILAI_HARGA
			from transaksi tr 
			join pelabuhan p on p.PELABUHAN_KODE = tr.PELABUHAN_KODE
			join penerima pn on pn.PENERIMA_KODE = tr.PENERIMA_KODE
			join komoditi k on k.KOMODITI_KODE = tr.KOMODITI_KODE
			join titik_pantau tp on tp.TITIK_PANTAU_KODE = tr.TITIK_PANTAU_KODE
			join 
			(select tr.TRANSAKSI_KODE, tp.TITIK_PANTAU_KODE, tp.TITIK_PANTAU_NAMA as Tujuan
				from transaksi tr join titik_pantau tp on tp.TITIK_PANTAU_KODE = tr.TITIK_PANTAU_TUJUAN) as tujuan
			on tujuan.TRANSAKSI_KODE = tr.TRANSAKSI_KODE";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0)
	        {
	            return $query->result_array();
	        }
	        else
	        	return null;
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
