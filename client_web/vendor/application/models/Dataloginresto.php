<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dataloginresto extends CI_Model {

    function __construct() {
	$this->load->database();
        $this->load->library('session');
        $idmitra = $this->session->userdata('idmitra');

        $data = $this->db->query("select * from mitra_mmart_mfood WHERE id = $idmitra");
        $d = $data->result_array();
        $this->id = $d[0]['id'];
        $this->email = $d[0]['email_penanggung_jawab'];
        $this->password = $d[0]['password'];
    }

    public $id;
    public $email;
    public $password;

    function setData1($namaresto, $kategoriresto, $alamat, $jambuka, $jamtutup, $kontaktelepon, $deskripsiresto) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');
//        echo "$namaresto , $kategoriresto";
        $this->db->query("UPDATE `restoran` SET 
            `nama_resto` = \"$namaresto\", 
            `alamat` = '$alamat', 
            `jam_buka` = '$jambuka', 
            `jam_tutup` = '$jamtutup', 
            `deskripsi_resto` = '$deskripsiresto', 
            `kategori_resto` = '$kategoriresto', 
            `kontak_telepon` = '$kontaktelepon' 
            WHERE `restoran`.`id` = $idresto;");
//        $this->db->query("UPDATE restoran SET nama_resto = '$namaresto' , alamat = '$alamat' , jam_buka = '$jambuka' , jam_tutup = '$jamtutup' , deskripsi_resto = '$deskripsiresto' , kategori_resto = '$kategoriresto' , kontak_telepon = '$kontaktelepon'  WHERE id = $idmitra;");
    
        
    }

    function setData2($password) {
        $this->load->library('session');
        $idmitra = $this->session->userdata('idmitra');

        $this->db->query("UPDATE mitra_mmart_mfood SET `password` = '$password' WHERE id = $idmitra;");
        
    }

}

?>
