<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_masalah extends CI_Model {
	public function tampil_data_masalah()
	{
		return $this->db->query( "SELECT m.id_masalah,t.no_tiket, m.tgl_lapor,i.nm_ins,m.nama_pelapor,m.media,m.keterangan,s.nm_status 
			FROM tb_masalah m,tb_instansi i , tb_status s , tb_tiket t
			WHERE m.id_ins = i.id_ins AND m.id_status = s.id_status AND m.id_masalah = t.id_masalah ORDER BY s.id_status ASC,m.tgl_lapor DESC")->result();
	}
    public function tampil_data_lpse()
    {
        return $this->db->query( "SELECT m.id_masalah,t.no_tiket, m.tgl_lapor,m.nm_ins,m.nama_pelapor,m.media,m.keterangan,s.nm_status 
            FROM tb_masalah_lpse m, tb_status s , tb_tiket_lpse t
            WHERE m.id_status = s.id_status AND m.id_masalah = t.id_masalah ORDER BY s.id_status ASC,m.tgl_lapor DESC")->result();
    }
	        public function get_kode_tiket()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_masalah,5)+0) AS kd_max FROM tb_masalah");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp); 
            }
        }
        else
        {
            $kd = "00001";
        }
        return date().$kd;
    }
        public function delete($id,$table)
    {
        $this->db->where('id_masalah', $id);
        $this->db->delete($table);
    }
        public function get_masalah($id)
	 {
 return $this->db->query( "SELECT m.id_masalah,t.no_tiket, m.tgl_lapor,m.id_ins,i.nm_ins,m.nama_pelapor,m.media,m.keterangan,s.nm_status ,m.teknisi,m.penerima,u.nama
            FROM tb_masalah m,tb_instansi i , tb_status s , tb_tiket t,tb_user u
            WHERE m.id_ins = i.id_ins AND m.id_status = s.id_status and u.id=m.penerima AND m.id_masalah = t.id_masalah AND m.id_masalah='$id'
            ORDER BY m.tgl_lapor DESC")->result();
    }
            public function get_detail_masalah($id)
     {
 return $this->db->query("
SELECT d.masalah,d.solusi,d.tgl_repair,u.nama,d.team FROM tb_masalah_dtl d,tb_user u WHERE u.id=d.id_user AND d.id_masalah='$id'

    ")->result();
    }
     public function tampil_perangkat()
    {
      return $this->db->query("SELECT id_perangkat,nama_perangkat from tb_perangkat")->result();
    }
     public function tampil_teknisi()
    {
      return $this->db->query("SELECT nama, id from tb_user where level='3'")->result();
    }
    public function lock($dato)
    {
     $this->db->query( "UPDATE tb_masalah set id_status='5' WHERE id_masalah=$dato");
    }
        public function lock_lpse($dato)
    {
     $this->db->query( "UPDATE tb_masalah_lpse set id_status='5' WHERE id_masalah=$dato");
    }
}

/* End of file m_data_masalah.php */
/* Location: ./application/models/m_backend/m_data_masalah.php */