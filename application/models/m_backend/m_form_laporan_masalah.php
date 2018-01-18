<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_form_laporan_masalah extends CI_Model {

	public function getkode_tiket()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(no_tiket,7)+0) AS kd_max FROM tb_tiket");
        $kd = "";

        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max);
                $kode = sprintf("%05s", $tmp);
            }
                if (substr($kode,0, 2)==substr(date("Y"),2, 4)) {
                    $kda=sprintf("%05s", $tmp);
                    $kd=$kda+1;
                } else {
                    $kd=substr(date("Y"),2, 4)."00001";
                }           
        }
        else
        {
            $kd = substr(date("Y"),2, 4)."0001";
        }
        return "J".$kd;
    }
    public function tampil_instansi()
    {
      return $this->db->query("SELECT id_ins,nm_ins from tb_instansi")->result();
    }
     public function tampil_teknisi()
    {
      return $this->db->query("SELECT nama, id from tb_user where level='3'")->result();
    }
public function insert_data($table,$data)
{
    $this->db->insert($table,$data);
}
    public function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);

    }
    public function simpan_data_tindakan($table,$data)
{
    $this->db->insert($table,$data);
}
public function tampil_detail_masalah()
{
        return $this->db->query( "SELECT d.tgl_repair,d.masalah,d.solusi,u.nama,d.team
    FROM tb_masalah_dtl d,tb_user u WHERE d.id_user=u.id")->result();
   
}
    
}

/* End of file m_form_laporan_masalah.php */
/* Location: ./application/models/m_form_laporan_masalah.php */