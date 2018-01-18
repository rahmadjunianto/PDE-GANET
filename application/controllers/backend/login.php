<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('v_backend/v_login');
		
	}

	public function cek_login()
	{
		# code...
        $this->load->model('backend/m_login');
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
                //set session with value from database
                $this->session->set_userdata($sess_array);
               // redirect('backend/dashboard');
                if ($this->session->userdata('LEVEL')=='2') {
                  echo "string";
                } else {
                    # code...
                }
                
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
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('PASS');
        $this->session->unset_userdata('NAME');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','Anda telah keluar dari aplikasi');
        redirect('login');
    }
    public function ganti_kategori()
    {
        $sess_array = array(
                    'KATEGORI' => $this->input->post('kategori')
                );
        $this->session->set_userdata($sess_array);
        redirect('backend/dashboard');
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */