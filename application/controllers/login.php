<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('v_backend/v_awal');
		
	}
    public function jaringan()
    {
        $sess_array = array(
                    'KATEGORI'=>'1'
                );
                $this->session->set_userdata($sess_array);
       $this->load->view('v_backend/v_login');
    }
    public function lpse()
    {
                $sess_array = array(
                    'KATEGORI'=>'2'
                );
                $this->session->set_userdata($sess_array);
       $this->load->view('v_backend/v_login');
    }
	public function cek_login()
	{
		# code...
        $this->load->model('m_backend/m_login');
		//Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query the database
        $result = $this->m_login->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'ID' => $row->id,
                    'USERNAME' => $row->username,
                    'PASS'=>$row->password,
                    'NAME'=>$row->nama,
                    'LEVEL'=>$row->level,
                    'login_status'=>true,
                );
                $this->session->set_userdata($sess_array);
               redirect('backend/dashboard');
                
            }
            return TRUE;
        } else {
            //if form validate false
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('login','refresh');
            return FALSE;
        }
	}
	    function logout() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('KATEGORI');        
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('NAME');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','Anda telah keluar dari aplikasi');
        redirect('login');
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */