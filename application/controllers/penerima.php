<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penerima extends CI_Controller
{

	public $penerima_kode;
	public $kota_kode;
	public $penerima_nama;
	public $penerima_alamat;

	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_penerima');
		$this->load->model('m_kota');

		$this->penerima_kode = $this->session->userdata('PENERIMA_KODE');
		$this->kota_kode = $this->session->userdata('KOTA_KODE');
		$this->penerima_nama = $this->session->userdata('PENERIMA_NAMA');
		$this->penerima_alamat = $this->session->userdata('PENERIMA_ALAMAT');
	}

	public function index()
	{
	}

	/*Dinas Pendidikan fitur*/
	public function master_data_penerima($penerima_kode=""){
        if($penerima_kode=="")
			{
				$selected['PENERIMA_KODE'] =  $this->m_penerima->get_id_penerima()[0]['id'];
				$selected['KOTA_KODE'] =  "";
				$selected['PENERIMA_NAMA'] =  "";
				$selected['PENERIMA_ALAMAT'] =  "";
			}
			else
				$selected=$this->m_penerima->get_data_selected_penerima($penerima_kode);
			  $data['selected']=$selected;
			 $data['daftar_kota'] = $this->m_kota->get_all_kota();
		  	$data['daftar_penerima'] = $this->m_penerima->get_all_penerima();
      

        $this->load->view('report/head_side.php');
		$this->load->view('report/mitra_bisnis.php', $data);
		$this->load->view('report/foot.php');

    }

    public function add_new_penerima() {
		$data=array(
		'KOTA_KODE' => $this->input->post('kota_kode'),
		'PENERIMA_NAMA' => $this->input->post('penerima_nama'),
		'PENERIMA_ALAMAT' => $this->input->post('penerima_alamat')
		);
		$this->m_penerima->do_insert_penerima($data);
		$this->index();
	}

	public function delete_penerima($penerima_kode) {
		$this->load->model('m_penerima','',TRUE);
		$this->m_penerima->do_delete_penerima($penerima_alamat);
		redirect('penerima/master_data_penerima');
	}

	public function edit_selected_penerima(){
		$this->load->model('m_penerima','',TRUE);
			$penerima_kode = $this->input->post('penerima_kode');
			$kota_kode =$this->input->post('kota_kode');
			$penerima_nama = $this->input->post('penerima_nama');
			$penerima_alamat = $this->input->post('penerima_alamat');
			$data = array (
				'KOTA_KODE' => $this->input->post('komoditi_nama'),
				'PENERIMA_NAMA' => $this->input->post('komoditi_jenis'),
				'PENERIMA_ALAMAT' => $this->input->post('komoditi_asal')
			);
			$this->m_penerima->do_edit_penerima($data);
	}
   

}
