<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		$this->load->model('m_backend/m_dashboard');
 		
		$data = array(
			'active_dashboard' =>'active' ,
			'tampilantena' => $this->m_dashboard->chartantena(), 
			'tampilrouter' => $this->m_dashboard->chartrouter(),
			'tampilswitch' => $this->m_dashboard->chartswitch(),
			'tampilkabel' => $this->m_dashboard->chartkabel(),
			'tampilpoe' => $this->m_dashboard->chartpoe(),
			'tampilkomputer' => $this->m_dashboard->chartkomputer(),
			'tampillain' => $this->m_dashboard->chartlain(),
			'tampilbulan' => $this->m_dashboard->databulan(),
			'tampillpse' => $this->m_dashboard->datalpse(),
			);
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_dashboard');
		$this->load->view('v_backend/v_footer',$data); 
	}


}

/* End of file dasboard.php */
/* Location: ./application/controllers/dasboard.php */