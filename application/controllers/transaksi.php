<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function formulir_transaksi()
	{
		$this->load->view('report/head_side.php');
		$this->load->view('report/formulir_transaksi.php');
		$this->load->view('report/foot.php');

	}

}
