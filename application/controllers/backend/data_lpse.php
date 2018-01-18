<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_lpse extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_backend/m_data_lpse');
			if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','SILAHKAN LOGIN TERLEBIH DAHULU !');
            redirect('backend/login');
        };
	}
	public function index() 
	{
		$this->load->model('m_backend/m_data_lpse');
		$data = array(
			'active_data_masalah' =>'active' , 
			 'tampildata' => $this->m_data_lpse->tampil_data_lpse(),
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_data_lpse');
		$this->load->view('v_backend/v_footer');
	}
	public function page_tambah_masalah()
	{
		$data = array(
			'active_data_lpse' =>'active' ,
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_laporan_masalah_lpse');
		$this->load->view('v_backend/v_footer');
	}
		public function hapus_data_masalah_lpse(){
		$id = $this->uri->segment(4);
        $this->m_data_lpse->delete_lpse($id,'tb_masalah_lpse');
        $this->m_data_lpse->delete_lpse($id,'tb_tiket_lpse');
        	$base= base_url();
	echo "<script>alert('Data berhasil dihapus !'); document.location='"."$base"."backend/data_lpse'</script>";

    }
    public function page_edit_masalah_lpse()
    {		
    	$where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_form_laporan_masalah_lpse');
    	$data = array(
			'active_data_lpse' =>'active' ,
			'tampildata' => $this->m_data_lpse->get_masalah_lpse($where),
			'instansi'=>$this->m_form_laporan_masalah_lpse->tampil_instansi(),
			't'=>$this->m_form_laporan_masalah_lpse->tampil_teknisi(),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_edit_laporan_masalah_lpse');
		$this->load->view('v_backend/v_footer');
    }
    public function page_detail_masalah_lpse()
    {	
        $where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_form_laporan_masalah_lpse');
    	$data = array(
			'active_data_lpse' =>'active' ,
			'tampildata' => $this->m_data_lpse->get_masalah_lpse($where),
			'instansi'=>$this->m_form_laporan_masalah_lpse->tampil_instansi(),
			'tampildetaildata' => $this->m_data_lpse->get_detail_masalah_lpse($where),
			't'=>$this->m_form_laporan_masalah_lpse->tampil_teknisi(),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_detail_masalah_lpse');
		$this->load->view('v_backend/v_footer');
	}
	
    
}

/* End of file data_masalah.php */
/* Location: ./application/controllers/data_masalah.php */