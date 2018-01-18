<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_instansi extends CI_Controller {
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
		$this->load->model('m_backend/m_data_instansi');
		$data = array('active_data_instansi' =>'active' ,
			 'tampildata' => $this->m_data_instansi->tampil_instansi(),
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_data_instansi');
		$this->load->view('v_backend/v_footer');
	}
	public function page_tambah_instansi()
	{
		$this->load->model('m_backend/m_data_instansi');
		$data = array(
			'active_data_instansi' =>'active' ,
			 );
		$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_tambah_instansi');
		$this->load->view('v_backend/v_footer');
	}
	public function hapus_data_instansi(){
		$this->load->model('m_backend/m_data_instansi');
		$id = $this->uri->segment(4);
        $this->m_data_instansi->delete($id,'tb_instansi');
        
        	$base= base_url();
	echo "<script>alert('Data berhasil dihapus !'); document.location='"."$base"."backend/data_instansi'</script>";

    }
    public function page_edit_instansi()
    {	
    	$this->load->model('m_backend/m_data_instansi');
    	$where['id_ins'] = $this->uri->segment(4);
    	$data = array(
			'active_data_instansi' =>'active' ,
			'tampil_data_instansi' => $this->m_data_instansi->getSelectedData('tb_instansi',$where),
			 );
    	$this->load->view('v_backend/v_header',$data);
		$this->load->view('v_backend/v_form_edit_instansi');
		$this->load->view('v_backend/v_footer');
    }
    public function insert_data_instansi()
    {
    	$this->load->model('m_backend/m_data_instansi');
    	$i=0;
		$instansi = array(

			'nm_ins'=>$this->input->post('nama_ins'),
			'almt_ins'=>$this->input->post('alamat'),
			'telp_ins'=>$this->input->post('telp'),
		
			
		);
    $this->m_data_instansi->insert_data_instansi('tb_instansi',$instansi);
	
	$base= base_url();
	echo "<script>alert('Data berhasil disimpan !'); document.location='"."$base"."backend/data_instansi'</script>";
}
public function update_data_instansi()
{
	$this->load->model('m_backend/m_data_instansi');	
		$data = array(
			'nm_ins'=>$this->input->post('nama_ins'),
			'almt_ins'=>$this->input->post('alamat'),
			'telp_ins'=>$this->input->post('telp'),
			);
		
		$id['id'] =$this->input->post('id');
		$this->m_data_user->updateinstansi('tb_instansi',$data,$id);
		$base= base_url();
		echo "<script>alert('Data berhasil diubah !'); document.location='"."$base"."backend/data_instansi'</script>";
}
	
}

/* End of file data_instansi.php */
/* Location: ./application/controllers/backend/data_instansi.php */