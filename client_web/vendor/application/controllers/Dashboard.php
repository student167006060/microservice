<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public $datakirim;

    public function index() {
        $this->load->database();
        $this->load->library('session');

        $idmitra = $this->session->userdata('idmitra');
        $namaresto = $this->session->userdata('nama');

        if ($idmitra != NULL) {
            $data = $this->db->query("select * from mitra_mmart_mfood a, restoran b, kategori_resto c WHERE a.lapak = b.id AND b.kategori_resto = c.id AND a.id = $idmitra");
            $d = $data->result_array();

            $this->load->model('Makanan');
            $jumlahmakanan = $this->Makanan->getJumlahMakanan();
            if ($jumlahmakanan == NULL) {
                $jumlahmakanan = 0;
            }

            $this->datakirim = array(
                "nama_resto" => $d[0]['nama_resto'],
                "kategori" => $d[0]['kategori'],
                "alamat" => $d[0]['alamat'],
                "jam_buka" => $d[0]['jam_buka'],
                "jam_tutup" => $d[0]['jam_tutup'],
                "deskripsi_resto" => $d[0]['deskripsi_resto'],
                "kontak_telepon" => $d[0]['kontak_telepon'],
                "foto" => $d[0]['foto_resto'],
                "namaresto" => $namaresto,
                "jumlahmakanan" => $jumlahmakanan[0]['jumlah']
            );


//            data grafik bar data tiap bulan 
            $this->load->model('Transaksi_m');
            $this->datakirim['transbulanini'] = $this->Transaksi_m->getTotalTransaksiBulanan(date('n'), date('Y'));
            $this->datakirim['bln1'] = $this->Transaksi_m->getTotalTransaksiBulanan(1, date('Y'));
            $this->datakirim['bln2'] = $this->Transaksi_m->getTotalTransaksiBulanan(2, date('Y'));
            $this->datakirim['bln3'] = $this->Transaksi_m->getTotalTransaksiBulanan(3, date('Y'));
            $this->datakirim['bln4'] = $this->Transaksi_m->getTotalTransaksiBulanan(4, date('Y'));
            $this->datakirim['bln5'] = $this->Transaksi_m->getTotalTransaksiBulanan(5, date('Y'));
            $this->datakirim['bln6'] = $this->Transaksi_m->getTotalTransaksiBulanan(6, date('Y'));
            $this->datakirim['bln7'] = $this->Transaksi_m->getTotalTransaksiBulanan(7, date('Y'));
            $this->datakirim['bln8'] = $this->Transaksi_m->getTotalTransaksiBulanan(8, date('Y'));
            $this->datakirim['bln9'] = $this->Transaksi_m->getTotalTransaksiBulanan(9, date('Y'));
            $this->datakirim['bln10'] = $this->Transaksi_m->getTotalTransaksiBulanan(10, date('Y'));
            $this->datakirim['bln11'] = $this->Transaksi_m->getTotalTransaksiBulanan(11, date('Y'));
            $this->datakirim['bln12'] = $this->Transaksi_m->getTotalTransaksiBulanan(12, date('Y'));

            $this->load->view('dashboard_view', $this->datakirim);
        } else {
            header('Location: ' . base_url());
        }
    }

}