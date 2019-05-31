<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function getTransaksiResto($bulan, $tahun) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("
            SELECT *
            FROM transaksi_detail_mfood a, transaksi b, pelanggan c
            WHERE a.id_transaksi = b.id
            AND b.id_pelanggan = c.id
            AND a.id_resto = $idresto
            AND MONTH(b.waktu_order) = $bulan
            AND YEAR(b.waktu_order) = $tahun
            
            ");
        return $query->result();
    }

    function getTotalTransaksiBulanan($bulan, $tahun) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        $query = $this->db->query("
            SELECT COUNT(a.id) AS jumlah
            FROM transaksi_detail_mfood a, transaksi b
            WHERE a.id_transaksi = b.id
            AND a.id_resto = $idresto
            AND MONTH(b.waktu_order) = $bulan
            AND YEAR(b.waktu_order) = $tahun
            ");
        return $query->result_array();
    }


}