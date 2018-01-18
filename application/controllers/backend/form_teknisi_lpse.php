<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_teknisi_lpse extends CI_Controller {
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
		$this->load->model('m_backend/m_data_lpse');
		$data = array(
			'active_form_teknisi' =>'active' ,
			 'tampildata' => $this->m_data_lpse->tampil_data_lpse(),

			);
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_teknisi_lpse');
		$this->load->view('v_backend/v_footer');
	}
	    public function page_tindakan_masalah_lpse()
    {		
    	$where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_data_lpse');
    	$this->load->model('m_backend/m_form_laporan_masalah_lpse');
    	$data = array(
			'active_form_teknisi' =>'active' ,
			'tampildata' => $this->m_data_lpse->get_masalah_lpse($where),
			'instansi'=>$this->m_form_laporan_masalah_lpse->tampil_instansi(),
			't'=>$this->m_form_laporan_masalah_lpse->tampil_teknisi(),
			 'perangkat'=>$this->m_data_lpse->tampil_perangkat(),
			 'teknisi'=>$this->m_data_lpse->tampil_teknisi(),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_tindakan_masalah_lpse');
		$this->load->view('v_backend/v_footer');
    }
        public function page_detail_masalah_lpse()
    {	
    	$this->load->model('m_backend/m_data_lpse');
        $where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_form_laporan_masalah_lpse');
    	$data = array(
			'active_form_teknisi' =>'active' ,
			'tampildata' => $this->m_data_lpse->get_masalah_lpse($where),
			'tampildetaildata' => $this->m_data_lpse->get_detail_masalah_lpse($where),
			'instansi'=>$this->m_form_laporan_masalah_lpse->tampil_instansi(),
			't'=>$this->m_form_laporan_masalah_lpse->tampil_teknisi(),
			 ); 
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_detail_masalah_lpse');
		$this->load->view('v_backend/v_footer');
	}
	public function simpan_form_tindakan_lpse()
	{
		$this->load->model('m_backend/m_form_laporan_masalah_lpse');

		$id['id_masalah']=$this->input->post('id_masalah');
		$masalah = array(
			'id_status'=>$this->input->post('status'),
			);
		$detail_masalah = array(
			'id_masalah'=>$this->input->post('id_masalah'),
			'tgl_repair'=>date("Y-m-d H:i:s"),
			'masalah'=>$this->input->post('deskripsi'),
			'solusi'=>$this->input->post('solusi'),
			'id_user'=>$this->session->userdata('ID'),
			);
    $this->m_form_laporan_masalah_lpse->simpan_data_tindakan_lpse('tb_masalah_dtl_lpse',$detail_masalah);
	$this->m_form_laporan_masalah_lpse->updateData_lpse('tb_masalah_lpse',$masalah,$id);
	$base= base_url();
	echo "<script>alert('Data berhasil disimpan !'); document.location='"."$base"."backend/data_lpse'</script>";
	}
 
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */