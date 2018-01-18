<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
				$data = array(
			'title' =>'Web Portal PDE' ,
			'header'=>'Web Portal PDE',
		);
		$this->load->view('v_frontend/v_header',$data);
		$this->load->view('v_frontend/v_index');
		$this->load->view('v_frontend/v_footer');
	}

	public function cari_jaringan()
	{
		$this->load->model('m_frontend/m_home');
		$where=$this->input->post('notiket');
		$data = array(
			'title' =>'Portal' ,
			'tampildata' => $this->m_home->cari_jaringan($where),
			'tampildetaildata' => $this->m_home->get_detail_masalah($where),
			'header'=>'Portal',
		);
		$this->load->view('v_frontend/v_header',$data);
		$this->load->view('v_frontend/v_hasil_cari');
		$this->load->view('v_frontend/v_footer');
	}
	public function cari_lpse()
	{
		$this->load->model('m_frontend/m_home');
		$where=$this->input->post('nomasalah');
		$data = array(
			'title' =>'Portal' ,
			'tampildata' => $this->m_home->cari_lpse($where), 
			'tampildetaildata' => $this->m_home->get_detail_lpse($where),
			
			'header'=>'Portal',
		);
		$this->load->view('v_frontend/v_header',$data);
		$this->load->view('v_frontend/v_hasil_cari_lpse');
		$this->load->view('v_frontend/v_footer'); 
	}
	public function Jaringan()
	{	$data = array(
			'title' =>'Portal' ,
			'header'=>'Portal',
		);
		$this->load->view('v_frontend/v_header',$data);
		$this->load->view('v_frontend/v_jaringan');
		$this->load->view('v_frontend/v_footer');
	}
	public function lpse()
	{	$data = array(
			'title' =>'Portal' ,
			'header'=>'Portal',
		);
		$this->load->view('v_frontend/v_header',$data);
		$this->load->view('v_frontend/v_lpse');
		$this->load->view('v_frontend/v_footer');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */