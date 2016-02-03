<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function report() {
        parent::__construct();
        $this->load->model('report_model');
    }
	public function index()
	{
		$data['report'] = $this->report_model->get_all_data_transaksi();
		$this->load->view('report/head_side.php',$data);
		$this->load->view('report/transaksi.php',$data);
		$this->load->view('report/foot.php',$data);
	}

	public function laporanBongkarMuat()
	{
		$tahun = 0;
		$bulan = 0;
		if($this->input->post('tahun') != null)
			$tahun = $this->input->post('tahun');
		if($this->input->post('bulan') != null)
			$bulan = $this->input->post('bulan');
		$data['report'] = $this->report_model->get_all_data_transaksi($tahun, $bulan);
		$this->load->view('report/head_side.php',$data);
		$this->load->view('report/transaksi.php',$data);
		$this->load->view('report/foot.php',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */