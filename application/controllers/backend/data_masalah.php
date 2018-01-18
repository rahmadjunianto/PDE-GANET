<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_masalah extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_backend/m_data_masalah');
			if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','SILAHKAN LOGIN TERLEBIH DAHULU !');
            redirect('backend/login');
        };
	}
	public function index()
	{
		$this->load->model('m_backend/m_data_masalah');
		$data = array(
			'active_data_masalah' =>'active' ,
			 'tampildata' => $this->m_data_masalah->tampil_data_masalah(),
			 'tampildatalpse' => $this->m_data_masalah->tampil_data_lpse(),
			 );
		$this->load->view('v_backend/v_header',$data); 
		$this->load->view('v_backend/v_data_masalah');
		$this->load->view('v_backend/v_footer'); 
	}
	public function page_tambah_masalah()
	{
		$data = array(
			'active_data_masalah' =>'active' ,
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_laporan_masalah');
		$this->load->view('v_backend/v_footer');
	}
		public function hapus_data_masalah(){
		$id = $this->uri->segment(4);
        $this->m_data_masalah->delete($id,'tb_masalah');
        $this->m_data_masalah->delete($id,'tb_tiket');
        	$base= base_url();
	echo "<script>alert('Data berhasil dihapus !'); document.location='"."$base"."backend/data_masalah'</script>";

    }
    public function page_edit_masalah()
    {		
    	$where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_form_laporan_masalah');
    	$data = array(
			'active_data_masalah' =>'active' ,
			'tampildata' => $this->m_data_masalah->get_masalah($where),
			'instansi'=>$this->m_form_laporan_masalah->tampil_instansi(),
			't'=>$this->m_form_laporan_masalah->tampil_teknisi(),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_edit_laporan_masalah');
		$this->load->view('v_backend/v_footer');
    }
    public function page_detail_masalah()
    {	
        $where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_form_laporan_masalah');
    	$data = array(
			'active_data_masalah' =>'active' ,
			'tampildata' => $this->m_data_masalah->get_masalah($where),
			'instansi'=>$this->m_form_laporan_masalah->tampil_instansi(),
			'tampildetaildata' => $this->m_data_masalah->get_detail_masalah($where),
			't'=>$this->m_form_laporan_masalah->tampil_teknisi(),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_detail_masalah');
		$this->load->view('v_backend/v_footer');
	}
	public function lock_data_masalah()
	{
	$id = $this->uri->segment(4);
	$this->load->model('m_backend/m_data_masalah');
        $this->m_data_masalah->lock($id);
        	$base= base_url();
	echo "<script>alert('Data berhasil dikunci !'); document.location='"."$base"."backend/data_masalah'</script>";
	}
	public function lock_data_masalah_lpse()
	{
	$id = $this->uri->segment(4);
	$this->load->model('m_backend/m_data_masalah');
        $this->m_data_masalah->lock_lpse($id);
        	$base= base_url();
	echo "<script>alert('Data berhasil dikunci !'); document.location='"."$base"."backend/data_lpse'</script>";
	}
	
    
}

/* End of file data_masalah.php */
/* Location: ./application/controllers/data_masalah.php */