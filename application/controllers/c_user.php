<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends CI_Controller
{

	public $user_kode;
	public $user_username;
	public $user_password;
	public $user_nama;
	public $user_nip ;
	public $user_nuptk;
	public $user_level;

	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_user');
		$this->load->helper(array('form','url'));
		
		$this->user_kode = $this->session->userdata('USER_KODE');
		$this->user_username = $this->session->userdata('USERNAME');
		$this->user_password = $this->session->userdata('PASSWORD');
		$this->user_nama = $this->session->userdata('USER_NAMA');
		$this->user_nip = $this->session->userdata('NIP');
		$this->user_nuptk = $this->session->userdata('NUPTK');
		$this->user_kode = $this->session->userdata('USER_LEVEL');

	}

	public function index()
	{
		/* is temporary */
		redirect('c_user/data_user');
	}
	/* view all user*/
	public function data_user($user_kode=""){
		if($user_kode=="")
			{
				$selected['USER_KODE'] =  $this->m_user->get_id_user()[0]['id'];
				$selected['USERNAME'] =  "";
				$selected['PASSWORD'] =  "";
				$selected['USER_NAMA'] =  "";
				$selected['NIP'] =  "";
				$selected['NUPTK'] =  "";
				$selected['USER_LEVEL'] =  "";
			}
		else
			$selected=$this->m_user->get_data_selected_user($user_kode);
		$data['selected']=$selected;
		$data['daftar_user'] = $this->m_user->get_all_user();
		$this->load->view('header');
		$this->load->view('sidebar');
		//$this->load->view('welcome_message', $data);
		$this->load->view('page_komoditi_1');
		$this->load->view('footer');
	}

	/* view user selected to delete*/
	public function delete_selected_user($user_kode) {
		$this->load->model('m_user','',TRUE);
		$this->m_user->delete_user_seleted($user_kode);
		redirect('c_user/data_user');
	}

	/* add new user*/
	public function add_new_user(){
		$this->load->model('m_user','',TRUE);
		$data=array(
			'USERNAME' => $this->input->post('user_username'),
			'PASSWORD' => $this->input->post('user_password'),
			'USER_NAMA' => $this->input->post('user_nama'),
			
			'NIP' => $this->input->post('user_nip'),
			'NUPTK' => $this->input->post('user_nuptk'),
			'USER_LEVEL' => $this->input->post('user_level')
			);
		
			$this->m_user->do_insert_new_user($data);
			//$this->index();
	}

	/* get selecter user to edit*/
	public function edit_user_selected(){
			$this->load->model('m_user','',TRUE);
			$user_kode = $this->input->post('user_kode');
			$user_nama =$this->input->post('user_nama');
			$nip = $this->input->post('nip');
			$nuptk = $this->input->post('nuptk');
			
			$data = array (
				'USER_NAMA' => $this->input->post('user_nama'),
				'NIP' => $this->input->post('nip'),
				'NUPTK' => $this->input->post('nuptk')
			);
			$this->m_user->do_edit_selected_user($data);
	}

}

?>
