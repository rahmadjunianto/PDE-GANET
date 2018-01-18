<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cetak_surat_tugas extends CI_Model {

	public function tampil_data_surat()
	{
		return $this->db->query( "SELECT m.id_masalah,t.no_tiket,m.tgl_lapor,i.nm_ins,m.nama_pelapor,m.keterangan 
			FROM tb_masalah m,tb_instansi i,tb_tiket t
			WHERE m.id_ins = i.id_ins AND m.id_masalah = t.id_masalah ORDER BY m.tgl_lapor DESC")->result();
	}
	public function tampil_teknisi($id)
	{
	return $this->db->query( "SELECT m.id_masalah,i.nm_ins, m.teknisi
			FROM tb_masalah m,tb_instansi i,tb_tiket t
			WHERE m.id_ins = i.id_ins AND m.id_masalah = t.id_masalah AND m.id_masalah='$id' ORDER BY m.tgl_lapor DESC")->result();
	}
		public function teknis($teknisi)
	{
	return $this->db->query( "SELECT id,nama FROM tb_user 
WHERE nama IN ($teknisi) order by nama asc")->result();
	}
		public function jadwal($id)
	{
	return $this->db->query("SELECT ins.nm_ins,CONCAT (DAY(NOW()),' ',
	CASE (MONTH(NOW())) WHEN '01' THEN 'Januari'
	WHEN '02' THEN 'Februari'
	WHEN '03' THEN 'Maret'
	WHEN '04' THEN 'April'
	WHEN '05' THEN 'Mei'
	WHEN '06' THEN 'Juni'
	WHEN '07' THEN 'Juli'
	WHEN '08' THEN 'Agustus'
	WHEN '09' THEN 'September'
	WHEN '10' THEN 'Oktober'
	WHEN '11' THEN 'November'
	WHEN '12' THEN 'Desember'
	END
	,' ',
	(YEAR(NOW()))) AS buat,
	CASE
	WHEN DATE_FORMAT(NOW(),'%w') = 0 THEN 'Minggu'
	WHEN DATE_FORMAT(NOW(),'%w') = 1 THEN 'Senin'
	WHEN DATE_FORMAT(NOW(),'%w') = 2 THEN 'Selasa'
	WHEN DATE_FORMAT(NOW(),'%w') = 3 THEN 'Rabu'
	WHEN DATE_FORMAT(NOW(),'%w') = 4 THEN 'Kamis'
	WHEN DATE_FORMAT(NOW(),'%w') = 5 THEN 'Jum`at'
	WHEN DATE_FORMAT(NOW(),'%w') = 6 THEN 'Sabtu'
	END AS hari,
	CONCAT(HOUR(NOW()),'.00 - Selesai') AS pukul
	FROM tb_masalah msl
					JOIN tb_instansi ins ON ins.id_ins=msl.id_ins
					WHERE msl.id_masalah= '$id'")->result();
	}

}

/* End of file m_cetak_surat_tugas.php */
/* Location: ./application/models/m_backend/m_cetak_surat_tugas.php */