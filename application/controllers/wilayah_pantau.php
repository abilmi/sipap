<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wilayah_pantau extends CI_Controller
{

	public $provinsi_kode;
	public $provinsi_nama;

	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_provinsi');
		$this->load->model('m_kota');

		$this->provinsi_kode = $this->session->userdata('PROVINSI_KODE');
		$this->provinsi_nama = $this->session->userdata('PROVINSI_NAMA');
	}

	public function index()
	{
	}

	/*Dinas Pendidikan fitur*/
	public function master_data_provinsi($provinsi_kode=""){
        if($provinsi_kode=="")
			{
				$selected['PROVINSI_KODE'] =  $this->m_provinsi->get_id_provinsi()[0]['id'];
				$selected['PROVINSI_NAMA'] =  "";
			}
			else
				$selected=$this->m_provinsi->get_data_selected_provinsi($provinsi_kode);
			  $data['selected']=$selected;
		  	$data['daftar_provinsi'] = $this->m_provinsi->get_all_provinsi();
      		$data['daftar_kota'] = $this->m_kota->get_all_kota();

        $this->load->view('report/head_side.php');
		$this->load->view('report/Wilayah_pantau.php', $data);
		$this->load->view('report/foot.php');

    }

    public function master_data_kota($kota_kode=""){
        if($kota_kode=="")
			{
				$selected['KOTA_KODE'] =  $this->m_kota->get_id_kota()[0]['id'];
				$selected['PROVINSI_KODE'] =  "";
				$selected['KOTA_NAMA'] =  "";
			}
			else
				$selected=$this->m_kota->get_data_selected_kota($kota_kode);
			  $data['selected']=$selected;
      		$data['daftar_kota'] = $this->m_kota->get_all_kota();

        $this->load->view('report/head_side.php');
		$this->load->view('report/Wilayah_kota.php', $data);
		$this->load->view('report/foot.php');

    }

    public function add_new_provinsi() {
		$data=array(
		'PROVINSI_NAMA' => $this->input->post('provinsi_nama')
		);
		$this->m_provinsi->do_insert_provinsi($data);
		$this->index();
	}

	public function delete_provinsi($provinsi_kode) {
		$this->load->model('m_provinsi','',TRUE);
		$this->m_provinsi->do_delete_provinsi($provinsi_kode);
		redirect('provinsi/master_data_provinsi');
	}

	public function edit_selected_provinsi(){
		$this->load->model('m_provinsi','',TRUE);
			$provinsi_kode = $this->input->post('provinsi_kode');
			$provinsi_nama =$this->input->post('provinsi_nama');
			$data = array (
				'PROVINSI_NAMA' => $this->input->post('provinsi_nama')
			);
			$this->m_provinsi->do_edit_provinsi($data);
	}

   

}
