<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_surat_tugas extends CI_Controller {

	public function index()
	{	
		$this->load->model('m_backend/m_cetak_surat_tugas');
		$data = array(
			'active_data_surat_tugas' =>'active' ,
			 'tampildata' => $this->m_cetak_surat_tugas->tampil_data_surat(),
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_cetak_surat_tugas');
		$this->load->view('v_backend/v_footer');	
	}
	public function form_cetak_tugas() 
	{	$this->load->model('m_backend/m_form_laporan_masalah');
		$where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_cetak_surat_tugas');
    	$data = array(
			'active_data_masalah' =>'active' ,
			'tampildata' => $this->m_cetak_surat_tugas->tampil_teknisi($where),
			'teknisi'=>$this->m_form_laporan_masalah->tampil_teknisi(),
			'id'=>$this->uri->segment(4),
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_cetak_tugas');
		$this->load->view('v_backend/v_footer');
	}
	public function cetak_surat()
	{$this->load->library('fpdf');
		 $i=0;
	$teknisi='';
	foreach($_POST['teknisi'] as $sel){
		$tek[]=$sel;
		$teknisi.="'".$tek[$i]."',";
		$i++;
	}
	$this->load->model('m_backend/m_cetak_surat_tugas');
	$teknisi = (substr($teknisi,0,1)==',')?substr($teknisi,1,strlen($teknisi)-1):substr($teknisi,0,strlen($teknisi)-1);
	    	$data = array(
			'teknisi' => $this->m_cetak_surat_tugas->teknis($teknisi),
			'jadwal' => $this->m_cetak_surat_tugas->jadwal($this->input->post('idmslh')),
			'nama'=>$this->input->post('nm_ttd'),
			'nip'=>$this->input->post('nip')
			 );
	$this->load->view('surat-tugas',$data);
	}
}

/* End of file cetak_surat_tugas.php */
/* Location: ./application/controllers/backend/cetak_surat_tugas.php */