<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelabuhan extends CI_Controller
{

	public $pelabuhan_kode;
	public $pelabuhan_nama;

	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_pelabuhan');

		$this->pelabuhan_kode = $this->session->userdata('PELABUHAN_KODE');
		$this->pelabuhan_nama = $this->session->userdata('PELABUHAN_NAMA');
	}

	public function index()
	{
	}

	/*Dinas Pendidikan fitur*/
	public function master_data_pelabuhan($pelabuhan_kode=""){
        if($pelabuhan_kode=="")
			{
				$selected['PELABUHAN_KODE'] =  $this->m_pelabuhan->get_id_pelabuhan()[0]['id'];
				$selected['PELABUHAN_NAMA'] =  "";
			}
			else
				$selected=$this->m_pelabuhan->get_data_selected_pelabuhan($pelabuhan_kode);
			  $data['selected']=$selected;
		  	$data['daftar_pelabuhan'] = $this->m_pelabuhan->get_all_pelabuhan();
      

        $this->load->view('report/head_side.php');
		$this->load->view('report/mitra_pelayaran.php', $data);
		$this->load->view('report/foot.php');

    }

    public function add_new_pelabuhan() {
		$data=array(
		'PELABUHAN_NAMA' => $this->input->post('pelabuhan_nama')
		);
		$this->m_pelabuhan->do_insert_pelabuhan($data);
		$this->index();
	}

	public function delete_pelabuhan($pelabuhan_kode) {
		$this->load->model('m_pelabuhan','',TRUE);
		$this->m_pelabuhan->do_delete_pelabuhan($pelabuhan_kode);
		redirect('Pelabuhan/master_data_pelabuhan');
	}

	public function edit_selected_pelabuhan(){
		$this->load->model('m_pelabuhan','',TRUE);
			$pelabuhan_kode = $this->input->post('pelabuhan_kode');
			$pelabuhan_nama =$this->input->post('pelabuhan_nama');
			$data = array (
				'PELABUHAN_NAMA' => $this->input->post('pelabuhan_nama')
			);
			$this->m_pelabuhan->do_edit_pelabuhan($data);
	}

   

}
