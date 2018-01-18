<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function chartantena()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS antena FROM tb_masalah_dtl WHERE masalah LIKE '%antena%'")->result();
	}
	public function chartrouter()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS router FROM tb_masalah_dtl WHERE masalah LIKE '%router%'")->result();
	}
	public function chartpoe()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS poe FROM tb_masalah_dtl WHERE masalah LIKE '%poe%'")->result();
	}
	public function chartswitch()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS switch FROM tb_masalah_dtl WHERE masalah LIKE '%switch%'")->result();
	}
	public function chartkabel()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS kabel FROM tb_masalah_dtl WHERE masalah LIKE '%kabel%'")->result();
	}
	public function chartlain()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS lain FROM tb_masalah_dtl WHERE masalah LIKE '%lain%'")->result();
	}
	public function chartkomputer()
	{
	return $this->db->query( "SELECT COUNT(masalah) AS komputer FROM tb_masalah_dtl WHERE masalah LIKE '%komputer%'")->result();
	}
	public function databulan()
	{
	return $this->db->query( "SELECT MONTHNAME(tgl_lapor) AS bulan, COUNT(id_masalah) AS jumlah FROM tb_masalah GROUP BY MONTH(tgl_lapor)")->result();
	}
	Public function datalpse()
	{
	return $this->db->query( "SELECT MONTHNAME(tgl_lapor) AS bulan, COUNT(id_masalah) AS jumlah FROM tb_masalah_lpse GROUP BY MONTH(tgl_lapor)")->result();
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_backend/m_dashboard.php */