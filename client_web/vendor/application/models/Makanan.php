<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function getJumlahMakanan() {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("SELECT COUNT(b.id) AS jumlah
            FROM menu_makanan a,makanan b 
            WHERE b.kategori_menu_makanan = a.id 
            AND a.id_restoran = $idresto;");
        return $query->result_array();
    }

    function getAllMakanan() {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("SELECT b.id AS id, a.menu_makanan, b.nama_menu , b.harga , b.deskripsi_menu , b.foto
            FROM menu_makanan a,makanan b 
            WHERE b.kategori_menu_makanan = a.id AND a.id_restoran = $idresto");
        return $query->result();
    }

    function getMakanan($id) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("SELECT b.id AS id, a.menu_makanan, b.nama_menu , b.harga , b.deskripsi_menu , b.foto
            FROM menu_makanan a,makanan b 
            WHERE b.kategori_menu_makanan = a.id 
            AND a.id_restoran = $idresto
            AND b.id = $id");
        return $query->result_array();
    }

    function hapusMakanan($id) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("DELETE FROM `makanan` WHERE `makanan`.`id` = $id");
    }

    function editMakanan($id, $nama, $harga, $kategori, $deskripsi) {
		$this->load->library('session');
        $idresto = $this->session->userdata('idresto');
        $query = $this->db->query("UPDATE `makanan` 
            SET `nama_menu` = '$nama', 
            `harga` = '$harga', 
            `kategori_menu_makanan` = '$kategori', 
            `deskripsi_menu` = '$deskripsi'
            WHERE `id` = $id;");
    }

    function editMakananDanFoto($id, $nama, $harga, $kategori, $deskripsi, $foto) {
        $query = $this->db->query("UPDATE `makanan` 
            SET `nama_menu` = '$nama', 
            `harga` = '$harga', 
            `kategori_menu_makanan` = '$kategori', 
            `deskripsi_menu` = '$deskripsi', 
            `foto` = '$foto' 
            WHERE `makanan`.`id` = $id;");
    }

    function tambahMenuMakanan($nama, $harga, $kategori, $deskripsi, $foto) {
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("INSERT INTO makanan (`id`, `nama_menu`, `harga`, `kategori_menu_makanan`, `deskripsi_menu`, `foto`) 
            VALUES (NULL, '$nama', '$harga', '$kategori', '$deskripsi', '$foto');");
//        
    }

}

?>
