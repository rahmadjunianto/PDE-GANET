<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cetak_laporan_masalah extends CI_Model {
public function cetak($tgl1,$tgl2)
{
return $this->db->query( "SELECT ms.tgl_lapor,ins.`nm_ins`,ms.`nama_pelapor`,ms.`keterangan`,us.`nama`,dt.`tgl_repair`,dt.`masalah`,dt.`solusi`,dt.`team`
					FROM tb_masalah ms
					JOIN tb_instansi ins ON ms.`id_ins`=ins.`id_ins`
					JOIN tb_user us ON ms.`penerima`=us.`id`
					JOIN tb_masalah_dtl dt ON ms.`id_masalah`=dt.`id_masalah`
					WHERE DATE_FORMAT(ms.tgl_lapor,'%Y-%m-%d')  BETWEEN  '".$tgl1."' AND '".$tgl2."' 
					ORDER BY ms.id_masalah")->result();
}
public function cetak_lpse($tgl1,$tgl2)
{
return $this->db->query( "SELECT ms.tgl_lapor,ms.`nm_ins`,ms.`nama_pelapor`,ms.`keterangan`,us.`nama`,dt.`tgl_repair`,dt.`masalah`,dt.`solusi`,dt.`team`
					FROM tb_masalah_lpse ms
					JOIN tb_user us ON ms.`penerima`=us.`id`
					JOIN tb_masalah_dtl_lpse dt ON ms.`id_masalah`=dt.`id_masalah`
					WHERE DATE_FORMAT(ms.tgl_lapor,'%Y-%m-%d')  BETWEEN  '".$tgl1."' AND '".$tgl2."' 
					ORDER BY ms.id_masalah")->result();
}
	/* */
public function masalah($tgl1,$tgl2)
{
return $this->db->query( "SELECT ms.id_masalah,ms.tgl_lapor,ins.`nm_ins`,ms.`nama_pelapor`,ms.`keterangan`,us.`nama`
					FROM tb_masalah ms
					JOIN tb_instansi ins ON ms.`id_ins`=ins.`id_ins`
					JOIN tb_user us ON ms.`penerima`=us.`id`
					JOIN tb_status s ON ms.`id_status`=s.`id_status`
					WHERE (ms.id_status=5 OR ms.id_status=4) AND 
					DATE_FORMAT(ms.tgl_lapor,'%Y-%m-%d')  BETWEEN  '".$tgl1."' AND '".$tgl2."' 
					ORDER BY ms.tgl_lapor ASC ")->result();
}
public function detail($tgl1,$tgl2)
{
return $this->db->query( "SELECT ms.id_masalah,dt.`tgl_repair`,dt.`masalah`,dt.`solusi`,dt.`team`
					FROM tb_masalah ms
					JOIN tb_instansi ins ON ms.`id_ins`=ins.`id_ins`
					JOIN tb_user us ON ms.`penerima`=us.`id`
					JOIN tb_masalah_dtl dt ON ms.`id_masalah`=dt.`id_masalah`
					WHERE DATE_FORMAT(ms.tgl_lapor,'%Y-%m-%d')  BETWEEN  '".$tgl1."' AND '".$tgl2."' 
					ORDER BY ms.id_masalah")->result();
}


}

/* End of file m_cetak_laporan_masalah.php */
/* Location: ./application/models/m_backend/m_cetak_laporan_masalah.php */