<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manageresto extends CI_Controller {

    public $datakirim;
    public $namaresto;
    public $pesan = "";
    public $idmitra;

    function __construct() {
        parent::__construct();
        $this->load->library('session');

        $this->idmitra = $this->session->userdata('idmitra');
        $namaresto = $this->session->userdata('nama');
        $this->namaresto = $namaresto;
    }

    public function index() {
        if ($this->idmitra != NULL) {
            $this->load->database();
            $this->load->library('session');

            $idmitra = $this->session->userdata('idmitra');
            $namaresto = $this->session->userdata('nama');
            $this->namaresto = $namaresto;

            $data = $this->db->query("select * from mitra_mmart_mfood , restoran WHERE mitra_mmart_mfood.lapak = restoran.id AND mitra_mmart_mfood.id = $idmitra");
            $d = $data->result_array();

            $this->load->model('kategori_resto');

            $datamanageresto = array(
                "pesan" => "$this->pesan",
                "namaresto" => $namaresto,
                "kategori" => $this->kategori_resto->getAllCategory(),
                "nama_resto" => $d[0]['nama_resto'],
                "alamat" => $d[0]['alamat'],
                "jam_buka" => $d[0]['jam_buka'],
                "jam_tutup" => $d[0]['jam_tutup'],
                "foto" => $d[0]['foto_resto'],
                "kontak_telepon" => $d[0]['kontak_telepon'],
                "deskripsi_resto" => $d[0]['deskripsi_resto'],
                "id" => $d[0]['id'],
                "email" => $d[0]['email_penanggung_jawab'],
                "email" => $d[0]['email_penanggung_jawab'],
            );
            $this->load->view('manageresto_view', $datamanageresto);
        } else {
            header('Location: ' . base_url());
        }
    }

    public function editDataResto() {
        $this->load->model('dataloginresto');
        $model = $this->dataloginresto;

//        terima data dari form
        $namaresto = $_POST['namaresto'];
        $kategoriresto = $_POST['kategoriresto'];
        $alamat = $_POST['alamat'];
        $jambuka = $_POST['jambuka'];
        $jamtutup = $_POST['jamtutup'];
        $kontaktelepon = $_POST['kontaktelepon'];
        $deskripsiresto = $_POST['deskripsiresto'];
        $foto = $this->input->post('foto');

        echo $_SERVER["DOCUMENT_ROOT"]."/vendor/asset/berkas_mmart_mfood/foto_restoran/$foto";
        if ($_FILES["userfile"]['name'] != NULL) {
            unlink($_SERVER["DOCUMENT_ROOT"]."/vendor/asset/berkas_mmart_mfood/foto_restoran/$foto");
            ?>
            <script>
                alert(<?= $_SERVER["DOCUMENT_ROOT"]."/vendor/asset/berkas_mmart_mfood/foto_restoran/$foto"?>);
            </script>
            <?php
            
            $config['file_name'] = $foto;
            $config['upload_path'] = $_SERVER["DOCUMENT_ROOT"]."/vendor/asset/berkas_mmart_mfood/foto_restoran";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20000';

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $model->setData1($namaresto, $kategoriresto, $alamat, $jambuka, $jamtutup, $kontaktelepon, $deskripsiresto);
            $this->pesan = "<p style=\"color:green\" class=\"text-center\">Data Mitra berhasil di update</p> <br>";
            $this->index();
		}
    }

    public function dataLogin() {
        $this->load->database();
        $this->load->library('session');

        $idmitra = $this->session->userdata('idmitra');
        $namaresto = $this->session->userdata('nama');

        $data = $this->db->query("select * from mitra_mmart_mfood , restoran WHERE mitra_mmart_mfood.lapak = restoran.id AND mitra_mmart_mfood.id = $idmitra");
        $d = $data->result_array();

        $this->load->model('kategori_resto');

        $datamanageresto = array(
            "pesan" => "",
            "namaresto" => $namaresto,
            "id" => $d[0]['id'],
            "email" => $d[0]['email_penanggung_jawab'],
        );


        $this->load->view('manageresto_view2', $datamanageresto);
    }

    public function editDataLogin() {

        $this->load->model('dataloginresto');
        $model = $this->dataloginresto;
        $email = $model->email;
        $passDB = $model->password;

//        terima data dari form
        $passlama = md5($_POST['passlama']);
        $passbaru = $_POST['passbaru'];
        $repassbaru = $_POST['repassbaru'];

        if ($passDB != $passlama) {
            $this->datakirim = array(
                "namaresto" => $this->namaresto,
                "pesan" => "<p style=\"color:red\" class=\"text-center\">Password lama yang anda masukkan salah</p> <br>",
                "id" => "$model->id",
                "email" => "$model->email",
            );

            $this->load->view('manageresto_view2', $this->datakirim);
        } elseif ($passbaru != $repassbaru) {
            $this->datakirim = array(
                "namaresto" => $this->namaresto,
                "pesan" => "<p style=\"color:red\" class=\"text-center\">Password baru yang anda masukkan tidak sesuai</p> <br>",
                "id" => "$model->id",
                "email" => "$model->email",
            );

            $this->load->view('manageresto_view2', $this->datakirim);
        } else {

            $model->setData2(md5($passbaru));
            $this->datakirim = array(
                "namaresto" => $this->namaresto,
                "pesan" => "<p style=\"color:green\" class=\"text-center\">Data Mitra berhasil di update</p> <br>",
                "id" => "$model->id",
                "email" => "$model->email",
            );

            $this->load->view('manageresto_view2', $this->datakirim);
        }
    }

}

