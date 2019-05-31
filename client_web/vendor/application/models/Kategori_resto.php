<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_resto extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function getAllCategory() {
        $query = $this->db->query('SELECT * FROM kategori_resto');
        return $query->result();
    }

}

?>
