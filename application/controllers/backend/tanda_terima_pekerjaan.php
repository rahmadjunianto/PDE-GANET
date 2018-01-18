<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanda_terima_pekerjaan extends CI_Controller {
			public function __construct()
	{
		parent::__construct();
			if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','SILAHKAN LOGIN TERLEBIH DAHULU !');
            redirect('backend/login');
        };
	}

	public function index()
	{
		$this->load->model('m_backend/m_tanda_terima_pekerjaan');
		$data = array(
			'active_data_tanda_terima' =>'active' ,
			 'tampildata' => $this->m_tanda_terima_pekerjaan->tampil_data_tanda_terima(),
			 );

		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_tanda_terima_pekerjaan'); 
		$this->load->view('v_backend/v_footer');
	}
	public function cetak_tanda_terima()

	{
		$this->load->model('m_backend/m_tanda_terima_pekerjaan');
	$this->load->library('fpdf');
	$where = $this->uri->segment(4);
	$data = array(
		'instansi' => $this->m_tanda_terima_pekerjaan->instansi($where),
		'isi' => $this->m_tanda_terima_pekerjaan->isi($where),
		'tgl' => $this->m_tanda_terima_pekerjaan->tgl($where),

		);
	$this->load->view('tanda-terimaold',$data);
	} 

}

/* End of file tanda_terima_pekerjaan.php */
/* Location: ./application/controllers/backend/tanda_terima_pekerjaan.php */