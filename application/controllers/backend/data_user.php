<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {
			public function __construct()
	{
		parent::__construct();
			if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','SILAHKAN LOGIN TERLEBIH DAHULU !');
            redirect('backend/login');
        };
	}

	public function index()
	{ 
		$this->load->model('m_backend/m_data_user');
		$data = array('active_data_user' =>'active' ,
			 'tampildata' => $this->m_data_user->tampil_data_user(),

			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_data_user');
		$this->load->view('v_backend/v_footer');
	}
	
	public function page_tambah_user()
	{
		$this->load->model('m_backend/m_data_user');
		$data = array(
			'active_data_user' =>'active' ,
			'level'=>$this->m_data_user->tampil_level(),
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_tambah_user');
		$this->load->view('v_backend/v_footer');
	}
	public function insert_data_user()
    {
    	$this->load->model('m_backend/m_data_user');
    	$i=0;
		$user = array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp'),
			'username'=>$this->input->post('user'),
			'password'=>md5($this->input->post('passwd')),
			
			'level'=>$this->input->post('level'),
			'ket'=>$this->input->post('ket'),
			
		);
    $this->m_data_user->insert_data_user('tb_user',$user);
	
	$base= base_url();
	echo "<script>alert('Data berhasil disimpan !'); document.location='"."$base"."backend/data_user'</script>";
}
public function hapus_data_user()
{
		$this->load->model('m_backend/m_data_user');
		$id = $this->uri->segment(4);
        $this->m_data_user->delete($id,'tb_user');
        
        	$base= base_url();
	echo "<script>alert('Data berhasil dihapus !'); document.location='"."$base"."backend/data_user'</script>";

    }
    public function edit_user()
    {		
    	$where = $this->uri->segment(4);
    	$this->load->model('m_backend/m_data_user');
    	$data = array(
			'active_data_user' =>'active' ,
			'tampildata' => $this->m_data_user->get_user($where),
			'level'=>$this->m_data_user->tampil_level(),
			
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_edit_user');
		$this->load->view('v_backend/v_footer');
    }
    public function update_data_user()
{
	$this->load->model('m_backend/m_data_user');	
		$data = array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'telp'=>$this->input->post('telp'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'level'=>$this->input->post('level'),
			'ket'=>$this->input->post('ket'),
			);
		
		$id['id'] =$this->input->post('id');
		$this->m_data_user->updateUser('tb_user',$data,$id);
		$base= base_url();
		echo "<script>alert('Data berhasil diubah !'); document.location='"."$base"."backend/data_user'</script>";
}

}

/* End of file data_user.php */
/* Location: ./application/controllers/data_user.php */