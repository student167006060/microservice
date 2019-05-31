<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_makanan extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function getAllCategory() {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("SELECT * FROM menu_makanan WHERE id_restoran = $idresto");
        return $query->result();
    }

}

?>
