<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tanda_terima_pekerjaan extends CI_Model {

	public function tampil_data_tanda_terima()
	{
		return $this->db->query( "SELECT m.id_masalah,t.no_tiket,m.tgl_lapor,i.nm_ins,m.nama_pelapor,m.keterangan 
			FROM tb_masalah m,tb_instansi i,tb_tiket t
			WHERE m.id_ins = i.id_ins AND m.id_masalah = t.id_masalah and m.id_status=4 ORDER BY m.tgl_lapor DESC")->result();
	}

	public function instansi($id)
	{
		return $this->db->query( "SELECT i.nm_ins FROM tb_instansi i, tb_masalah m WHERE i.id_ins=m.id_ins AND m.id_masalah = '$id'")->result();
	}
		public function isi($id)
	{
		return $this->db->query( "SELECT solusi FROM tb_masalah_dtl WHERE id_masalah='$id' ORDER BY tgl_repair DESC limit 4 ");
	}
		public function tgl($id)
	{
		return $this->db->query( "SELECT tgl_repair, solusi FROM tb_masalah_dtl WHERE id_masalah='$id' ORDER BY tgl_repair DESC LIMIT 1")->result();
	}	
}

/* End of file m_tanda_terima_pekerjaan.php */
/* Location: ./application/models/m_backend/m_tanda_terima_pekerjaan.php */