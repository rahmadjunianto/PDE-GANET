<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_instansi extends CI_Model {
	public function tampil_instansi()
	{
		return $this->db->query( "SELECT  i.id_ins, i.nm_ins,i.almt_ins,i.telp_ins 
			FROM tb_instansi i")->result();
	}
	public function delete($id,$table)
    {
        $this->db->where('id_ins', $id);
        $this->db->delete($table);
    }
        public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data)->result();
    }
    public function insert_data_instansi($table,$data)
{
    $this->db->insert($table,$data);

	}

}

/* End of file m_data_instansi.php */
/* Location: ./application/models/m_backend/m_data_instansi.php */