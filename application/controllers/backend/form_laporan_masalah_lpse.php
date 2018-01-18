<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_laporan_masalah_lpse extends CI_Controller {
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
		$this->load->model('m_backend/m_form_laporan_masalah_lpse');
		$data = array(
			'active_form_laporan_masalah_lpse' =>'active' , 
			'kd'=>$this->m_form_laporan_masalah_lpse->getkode_tiket(),
			'instansi'=>$this->m_form_laporan_masalah_lpse->tampil_instansi(),
			'teknisi'=>$this->m_form_laporan_masalah_lpse->tampil_teknisi(),
			);
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_laporan_masalah_lpse');
		$this->load->view('v_backend/v_footer');
	}
    public function insert_data_masalah_lpse()
    {
    	$this->load->model('m_backend/m_form_laporan_masalah_lpse');
    	$i=0;
		/*$teknisi='';
		foreach($_POST['teknisi'] as $sel){
			$tek[]=$sel;
			$teknisi.=$tek[$i].',';
			$i++;
		}
		$teknisi = (substr($teknisi,0,1)==',')?substr($teknisi,1,strlen($teknisi)-1):substr($teknisi,0,strlen($teknisi)-1);*/
		$masalah = array(
			'tgl_lapor'=>$this->input->post('tanggal')." ".date("H:i:s"),
			'nm_ins'=>$this->input->post('ins'),
			'nama_pelapor'=>$this->input->post('nnmpelapor'),
			'nohp'=>$this->input->post('nohp'),
			'email'=>$this->input->post('email'),
			'keterangan'=>$this->input->post('ket'),
			'id_status'=>$this->input->post('status'),
			'penerima'=>$this->session->userdata('ID'),
			'media'=>$this->input->post('media'),
			//'teknisi'=>$teknisi,
			);
		$tiket = array(
			'no_tiket'=>$this->input->post('kdtiket'),
		);
    $this->m_form_laporan_masalah_lpse->insert_data_lpse('tb_masalah_lpse',$masalah);
	$this->m_form_laporan_masalah_lpse->insert_data_lpse('tb_tiket_lpse',$tiket);
	$base= base_url();
	echo "<script>alert('Data berhasil disimpan !'); document.location='"."$base"."backend/data_lpse'</script>";
}

public function update_data_masalah_lpse()
{
	$this->load->model('m_backend/m_form_laporan_masalah_lpse');

		$masalah = array(
			'tgl_lapor'=>$this->input->post('tanggal')." ".date("H:i:s"),
			'nm_ins'=>$this->input->post('ins'),
			'nama_pelapor'=>$this->input->post('nnmpelapor'),
			'nohp'=>$this->input->post('nohp'),
			'email'=>$this->input->post('email'),
			'keterangan'=>$this->input->post('ket'),
			'id_status'=>$this->input->post('status'),
			'penerima'=>$this->session->userdata('ID'),
			'media'=>$this->input->post('media'),
			);
		$id['id_masalah'] =$this->input->post('id_masalah');
		$this->m_form_laporan_masalah_lpse->updateData_lpse('tb_masalah_lpse',$masalah,$id);
		$base= base_url();
		echo "<script>alert('Data berhasil diubah !'); document.location='"."$base"."backend/data_lpse'</script>";
}



}

/* End of file form_laporan_masalah.php */
/* Location: ./application/controllers/form_laporan_masalah.php */