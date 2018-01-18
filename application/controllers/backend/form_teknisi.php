<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_teknisi extends CI_Controller {
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
		$this->load->model('m_backend/m_data_masalah');
		$data = array(
			'active_form_teknisi' =>'active' ,
			 'tampilteknisi' => $this->m_data_masalah->tampil_data_masalah(),

			); 
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_teknisi');
		$this->load->view('v_backend/v_footer');
	}
	    public function page_tindakan_masalah()
    {		
    	$where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_data_masalah');
    	$this->load->model('m_backend/m_form_laporan_masalah');
    	$data = array(
			'active_form_teknisi' =>'active' ,
			'tampildata' => $this->m_data_masalah->get_masalah($where),
			'instansi'=>$this->m_form_laporan_masalah->tampil_instansi(),
			't'=>$this->m_form_laporan_masalah->tampil_teknisi(),
			 'perangkat'=>$this->m_data_masalah->tampil_perangkat(),
			 'teknisi'=>$this->m_data_masalah->tampil_teknisi(),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_tindakan_masalah');
		$this->load->view('v_backend/v_footer');
    }
        public function page_detail_masalah()
    {	
    	$this->load->model('m_backend/m_data_masalah');
        $where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_form_laporan_masalah');
    	$data = array(
			'active_form_teknisi' =>'active' ,
			'tampildata' => $this->m_data_masalah->get_masalah($where),
			'tampildetaildata' => $this->m_data_masalah->get_detail_masalah($where),
			'instansi'=>$this->m_form_laporan_masalah->tampil_instansi(),
			't'=>$this->m_form_laporan_masalah->tampil_teknisi(),
			 ); 
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_detail_masalah');
		$this->load->view('v_backend/v_footer');
	}
	public function simpan_form_tindakan()
	{
		$this->load->model('m_backend/m_form_laporan_masalah');
    	$i=0;
		$teknisi='';
		foreach($_POST['teknisi'] as $sel){
			$tek[]=$sel;
			$teknisi.=$tek[$i].',';
			$i++;
		}
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
			'team'=>$teknisi,
			);
    $this->m_form_laporan_masalah->simpan_data_tindakan('tb_masalah_dtl',$detail_masalah);
	$this->m_form_laporan_masalah->updateData('tb_masalah',$masalah,$id);
	$base= base_url();
	echo "<script>alert('Data berhasil disimpan !'); document.location='"."$base"."backend/data_masalah'</script>";
	}
 
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */