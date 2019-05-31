<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menumakanan extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function getAllMenuMakanan() {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');
        
        $query = $this->db->query("SELECT * FROM menu_makanan WHERE id_restoran = $idresto");
        return $query->result();
    }

    function cekMakananChild($id) {
        $query = $this->db->query("SELECT * FROM makanan WHERE kategori_menu_makanan = $id");
        return $query->result();
    }

    function hapusMenuMakananParent($id) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("DELETE FROM `menu_makanan` WHERE `id` = $id");
    }

    function tambahMenuMakanan($menumakanan) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("INSERT INTO `menu_makanan` (`id`, `menu_makanan`, `id_restoran`) 
            VALUES (NULL, '$menumakanan', '$idresto');");
//        
    }

}

?>
