<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_form_laporan_masalah extends CI_Model {

	public function getkode_tiket()
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
        return date('dmYHis').$kd;
    }

}

/* End of file m_form_laporan_masalah.php */
/* Location: ./application/models/m_form_laporan_masalah.php */