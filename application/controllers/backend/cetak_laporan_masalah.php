<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_laporan_masalah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('');
        };
	} 

	public function index()
	{
		$this->load->view('v_backend/v_header');
		$this->load->view('v_backend/v_cetak_laporan_masalah');
		$this->load->view('v_backend/v_footer');
	}
	public function cetak_laporan()
	{
		$this->load->model('m_backend/m_cetak_laporan_masalah');
		$data = array(
			'awal' => $this->input->post('awal'),
			'akhir'=>$this->input->post('akhir'),
			'cetak'=>$this->m_cetak_laporan_masalah->cetak( $this->input->post('awal'),$this->input->post('akhir'))
		 );
		$this->load->library('fpdf');
		$this->load->view('laporan2',$data);
	}
		public function cetak()
	{
		$this->load->model('m_backend/m_cetak_laporan_masalah');
		$data = array(
			'awal' => $this->input->post('awal'),
			'akhir'=>$this->input->post('akhir'),
			'cetak'=>$this->m_cetak_laporan_masalah->cetak( $this->input->post('awal'),$this->input->post('akhir')),
			'detail'=>$this->m_cetak_laporan_masalah->detail( $this->input->post('awal'),$this->input->post('akhir')),
		 );
		$this->load->library('fpdf');
		$this->load->view('laporan2',$data);
	}


}

/* End of file cetak_laporan_masalah.php */
/* Location: ./application/controllers/backend/cetak_laporan_masalah.php */