<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signout extends CI_Controller {

    public function index() {
        $this->load->library('session');
        $this->session->unset_userdata('idmitra');
        $this->session->unset_userdata('idresto');
        $this->session->unset_userdata('nama');
        $this->session->sess_destroy();
        header('Location: ' . base_url());
    }

}