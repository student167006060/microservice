<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahmakanan extends CI_Controller {

    public $datakirim;
    public $namaresto;
    public $pesan = "";
    public $idmitra;
    public $idresto;

    function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->idmitra = $this->session->userdata('idmitra');
        $this->idresto = $this->session->userdata('idresto');

        $namaresto = $this->session->userdata('nama');
        $this->namaresto = $namaresto;
    }

    public function index() {
        if ($this->idmitra != NULL) {
            $this->datakirim['namaresto'] = $this->namaresto;
            $this->datakirim['pesan'] = "$this->pesan";

//        mengambil kategori makanan
            $this->load->model('Kategori_makanan');
            $this->datakirim['kategori_makanan'] = $this->Kategori_makanan->getAllCategory();

            $this->load->view('tambahmakanan_view', $this->datakirim);
        } else {
            header('Location: ' . base_url());
        }
    }

    public function tambahMakanan() {
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
		$foto = $_FILES["userfile"]['name'];

        $pathfilesave = $_SERVER['DOCUMENT_ROOT'] . "/vendor/asset/berkas_mmart_mfood/foto_makanan/";

        echo "$foto";

        // UPLOAD FILE ke server
        if ($_FILES["userfile"]['name'] != NULL) {
            //            hapus foto lama 
            //            unlink("$pathfiledelete");
            //upload foto
            $config['file_name'] = $foto;
            $config['upload_path'] = $pathfilesave;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
        }
        $this->load->model('Makanan');
        $this->Makanan->tambahMenuMakanan($nama, $harga, $kategori, $deskripsi, $foto);
        $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Menu berhasil di tambahkan</p> <br>";
        $this->index();
    }

}

