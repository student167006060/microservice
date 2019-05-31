<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$kirim['pesan'] = "";
		$this->load->view('login_view',$kirim);
	}
	
	public function hello()
	{
		echo "haloooo";
	}
}
