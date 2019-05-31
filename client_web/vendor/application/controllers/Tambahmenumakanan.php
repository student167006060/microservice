<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahmenumakanan extends CI_Controller {

    public $datakirim;
    public $namaresto;
    public $pesan = "";
    public $idmitra;
    public $idresto;

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->API="http://zayini.ac.id/coba/index.php/Tambahmenumakanan";
        $this->idmitra = $this->session->userdata('idmitra');
        $this->idresto = $this->session->userdata('idresto');

        $namaresto = $this->session->userdata('nama');
        $this->namaresto = $namaresto;
    }

    public function index() {
        if ($this->idmitra != NULL) {
            $this->datakirim['namaresto'] = $this->namaresto;
            $this->datakirim['pesan'] = "$this->pesan";

//        pengambilan data menu makanan
            $this->load->model('Menumakanan');
            $this->datakirim['menumakanan'] = $this->Menumakanan->getAllMenuMakanan();

            $this->load->view('tambahmenumakanan_view', $this->datakirim);
        } else {
            header('Location: ' . base_url());
        }
    }

    public function hapusMenuMakanan($id) {
        $this->datakirim['namaresto'] = $this->namaresto;

//  cek tabel makanan child 
        $this->load->model('Menumakanan');
        $cek = $this->Menumakanan->cekMakananChild($id);

        if ($cek != null) {
            $this->pesan = "<p style=\"color:red\" class=\"text-center\">menu makanan tidak dapat di hapus, harap untuk menghapus semua makanan yang ada dalam kategori tersebut</p> <br>";
            $this->index();
        } else {
            $this->Menumakanan->hapusMenuMakananParent($id);
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Menu Makanan berhasil di hapus</p> <br>";
            $this->index();
        }
    }

    public function tambahMenuMakanan() {
        $menumakanan = $_POST['menumakanan'];

//        echo $menumakanan;
        $this->load->model('Menumakanan');
        $this->Menumakanan->tambahMenuMakanan($menumakanan);
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Menu Makanan berhasil di tambahkan</p> <br>";
        $this->index();
    }

}

