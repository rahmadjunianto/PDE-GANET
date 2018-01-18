<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_user extends CI_Model {
public function tampil_data_user()
	{
		return $this->db->query( "SELECT  u.id, u.nama, u.alamat, u.telp, u.level, u.ket,l.nm_level AS nama_level
            FROM tb_user u,tb_level l WHERE u.level=l.id_level")->result();
	}
public function tampil_level()
{
	return $this->db->query( "SELECT  l.id_level, l.nm_level
			FROM tb_level l")->result();
}
public function insert_data_user($table,$data)
{
	$this->db->insert($table,$data);
}
public function delete($id,$table)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }
    public function get_user($id)
	 {
 return $this->db->query( "SELECT  u.id, u.nama, u.alamat, u.telp, u.level, u.ket,u.username,u.password,l.nm_level AS nama_level
			FROM tb_user u,tb_level l   WHERE u.id='$id' AND u.level=l.id_level")->result();
    }
    public function updateUser($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);

    }
}

/* End of file m_data_user.php */
/* Location: ./application/models/m_backend/m_data_user.php */