<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model { 

	public function cari_jaringan($id)
	{
		 return $this->db->query( "SELECT 
		 	m.id_masalah,t.no_tiket, m.tgl_lapor,m.id_ins,i.nm_ins,m.nama_pelapor,m.media,m.keterangan,s.nm_status ,m.teknisi,
		 	m.penerima,u.nama
            FROM tb_masalah m,tb_instansi i , tb_status s , tb_tiket t,tb_user u
            WHERE m.id_ins = i.id_ins AND m.id_status = s.id_status AND u.id=m.penerima AND m.id_masalah = t.id_masalah AND 
            t.no_tiket='$id'
            ORDER BY m.tgl_lapor DESC")->result();
	}


	public function cari_lpse($id)
	{ return $this->db->query("SELECT  m.id_masalah,t.no_tiket, m.tgl_lapor,m.nama_pelapor,m.media,m.nm_ins,m.keterangan,s.nm_status ,m.teknisi
					FROM tb_masalah_lpse m, tb_status s , tb_tiket_lpse t,tb_user u
            WHERE  m.id_status = s.id_status AND u.id=m.penerima AND m.id_masalah = t.id_masalah AND 
            t.no_tiket='$id'
            ORDER BY m.tgl_lapor DESC")->result();
	}
	            public function get_detail_masalah($id)
     {
 return $this->db->query("SELECT d.masalah,d.solusi,d.tgl_repair,u.nama,d.team FROM tb_masalah_dtl d,tb_user u,tb_tiket t
WHERE u.id=d.id_user AND d.id_masalah=t.id_masalah AND no_tiket='$id'")->result();
    }
    	            public function get_detail_lpse($id)
     {
 return $this->db->query("SELECT d.masalah,d.solusi,d.tgl_repair,u.nama,d.team,t.no_tiket
FROM tb_masalah_dtl_lpse d,tb_tiket_lpse t,tb_user u
WHERE u.id=d.id_user AND d.id_masalah=t.id_masalah AND t.no_tiket='$id'")->result();
    }
    

}

/* End of file m_home.php */
/* Location: ./application/models/m_home.php */