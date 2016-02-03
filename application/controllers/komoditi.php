<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komoditi extends CI_Controller
{

	public $komoditi_kode;
	public $komoditi_nama;
	public $komoditi_jenis;
	public $komoditi_asal;
	public $komoditi_bentuk;
	public $satuan;

	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_komoditi');

		$this->komoditi_kode = $this->session->userdata('KOMODITI_KODE');
		$this->komoditi_nama = $this->session->userdata('KOMODITI_NAMA');
		$this->komoditi_jenis = $this->session->userdata('KOMODITI_JENIS');
		$this->komoditi_asal = $this->session->userdata('KOMODITI_ASAL');
		$this->komoditi_bentuk = $this->session->userdata('KOMODITI_BENTUK');
		$this->satuan = $this->session->userdata('SATUAN');
	}

	public function index()
	{
	}

	/*Dinas Pendidikan fitur*/
	public function master_data_komoditi($komoditi_kode=""){
        if($komoditi_kode=="")
			{
				$selected['KOMODITI_KODE'] =  $this->m_komoditi->get_id_komoditi()[0]['id'];
				$selected['KOMODITI_NAMA'] =  "";
				$selected['KOMODITI_JENIS'] =  "";
				$selected['KOMODITI_ASAL'] =  "";
				$selected['KOMODITI_BENTUK'] =  "";
				$selected['SATUAN'] =  "";
			}
			else
				$selected=$this->m_komoditi->get_data_selected_komoditi($komoditi_kode);
			  $data['selected']=$selected;
		  	$data['komoditi_nama'] = $this->m_komoditi->get_all_komoditi();
      

        $this->load->view('report/head_side.php');
		$this->load->view('report/komoditi.php', $data);
		$this->load->view('report/foot.php');

    }

    public function add_new_komoditi() {
		$data=array(
		'KOMODITI_NAMA' => $this->input->post('komoditi_nama'),
		'KOMODITI_JENIS' => $this->input->post('komoditi_jenis'),
		'KOMODITI_ASAL' => $this->input->post('komoditi_asal'),
		'KOMODITI_BENTUK' => $this->input->post('komoditi_bentuk'),
		'SATUAN' => $this->input->post('satuan')
		);
		$this->m_komoditi->do_insert_komoditi($data);
		$this->index();
	}

	public function delete_komoditi($komoditi_kode) {
		$this->load->model('m_komoditi','',TRUE);
		$this->m_komoditi->do_delete_komoditi($komoditi_kode);
		redirect('komoditi/master_data_komoditi');
	}

	public function edit_selected_komoditi(){
		$this->load->model('m_komoditi','',TRUE);
			$komoditi_kode = $this->input->post('komoditi_kode');
			$komoditi_nama =$this->input->post('komoditi_nama');
			$komoditi_jenis = $this->input->post('komoditi_jenis');
			$komoditi_asal = $this->input->post('komoditi_asal');
			$komoditi_bentuk =$this->input->post('komoditi_bentuk');
			$satuan = $this->input->post('satuan');
			$data = array (
				'KOMODITI_NAMA' => $this->input->post('komoditi_nama'),
				'KOMODITI_JENIS' => $this->input->post('komoditi_jenis'),
				'KOMODITI_ASAL' => $this->input->post('komoditi_asal'),
				'KOMODITI_BENTUK' => $this->input->post('komoditi_bentuk'),
				'SATUAN' => $this->input->post('satuan')
			);
			$this->m_komoditi->do_edit_komoditi($data);
	}

	public function analisa()
	{
		$this->load->view('report/head_side.php');
		$this->load->view('report/analisa_komoditi.php');
		$this->load->view('report/foot.php');
	}
   

}
