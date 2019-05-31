<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $pesanerror = array("pesan" => "");

    public function index() {
        $this->load->library('session');
        if ($this->session->userdata('idmitra') != NULL) {
            header('Location: ' . base_url() . "index.php/dashboard");
        } else {
            $this->load->view('login_view', $this->pesanerror);
        };
    }

    public function pengecekan() {

        $email = $_POST['email'];
        $pass = md5($_POST['pass']);

        $this->load->database();
        $data = $this->db->query("select mitra_mmart_mfood.id AS idmitra , restoran.id AS idresto, password, nama_resto, email_penanggung_jawab from mitra_mmart_mfood, restoran 
            WHERE mitra_mmart_mfood.lapak = restoran.id 
                AND email_penanggung_jawab = '$email' 
                AND mitra_mmart_mfood.jenis_lapak = 1");

        if ($d = $data->result_array()) {
            $emailDB = $d[0]['email_penanggung_jawab'];
            $passDB = $d[0]['password'];

            if ($passDB != $pass) {
                $this->pesanerror = array(
                    "pesan" => "Password Salah"
                );
                $this->load->view('login_view', $this->pesanerror);
            } else {
                $this->load->library('session');
                $this->session->set_userdata('idmitra', $d[0]['idmitra']);
                $this->session->set_userdata('idresto', $d[0]['idresto']);
                $this->session->set_userdata('nama', $d[0]['nama_resto']);
                header('Location: ' . base_url() . "index.php/dashboard");
            }
        } else {
            $this->pesanerror = array(
                "pesan" => "Mitra tidak terdaftar"
            );
            $this->load->view('login_view', $this->pesanerror);
        }
    }

}

