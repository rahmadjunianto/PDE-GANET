<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coba extends CI_Controller {

	public function index()
	{
		$a=substr(date("Y"),2, 4);
		echo "$a";
		$b=substr(1600027,0, 2);
		echo "\n $b";
	}

}

/* End of file coba.php */
/* Location: ./application/controllers/coba.php */