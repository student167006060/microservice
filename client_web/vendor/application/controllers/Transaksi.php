<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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

            $bulan = date('n');
            $tahun = date('Y');

            //        mengambil all makanan
            $this->load->model('Transaksi_m');
            $this->datakirim['transaksi'] = $this->Transaksi_m->getTransaksiResto($bulan, $tahun);
            $this->datakirim['bulan'] = $bulan;
            $this->datakirim['tahun'] = $tahun;

            $this->load->view('transaksi_view', $this->datakirim);
        } else {
            header('Location: ' . base_url());
        }
    }

    public function transaksiBlnSpesific() {
        if ($this->idmitra != NULL) {
            $this->datakirim['namaresto'] = $this->namaresto;
            $this->datakirim['pesan'] = "$this->pesan";

            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');

            //        mengambil all makanan
            $this->load->model('Transaksi_m');
            $this->datakirim['transaksi'] = $this->Transaksi_m->getTransaksiResto($bulan, $tahun);
            $this->datakirim['bulan'] = $bulan;
            $this->datakirim['tahun'] = $tahun;

            $this->load->view('transaksi_view', $this->datakirim);
        } else {
            header('Location: ' . base_url());
        }
    }

    public function excelData($bulan, $tahun) {
        $this->load->library('session');
        $idresto = $this->session->userdata('idresto');

        /*         * *****EDIT LINES 3-8****** */
        $DB_Server = "localhost"; //MySQL Server    
        $DB_Username = "root"; //MySQL Username     
        $DB_Password = "";             //MySQL Password     
        $DB_DBName = "ride";         //MySQL Database Name  
//        $DB_TBLName = "transaksi"; //MySQL Table Name   
        $filename = "datatransaksi";         //File Name

        /*         * *****YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE****** */
        //create MySQL connection   
        $sql = "
                SELECT a.id_transaksi, b.waktu_order, c.nama_depan, c.nama_belakang, a.total_biaya
                FROM transaksi_detail_mfood a, transaksi b, pelanggan c
                WHERE a.id_transaksi = b.id
                AND b.id_pelanggan = c.id
                AND a.id_resto = $idresto
                AND MONTH(b.waktu_order) = $bulan
                AND YEAR(b.waktu_order) = $tahun            
            ";
        $Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
        //select database   
        $Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error() . "<br>" . mysql_errno());
        //execute query 
        $result = @mysql_query($sql, $Connect) or die("Couldn't execute query:<br>" . mysql_error() . "<br>" . mysql_errno());
        $file_ending = "xls";
        //header info for browser
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=$filename.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        /*         * *****Start of Formatting for Excel****** */
        //define separator (defines columns in excel & tabs in word)
        $sep = "\t"; //tabbed character
        //start of printing column names as names of MySQL fields
        for ($i = 0; $i < mysql_num_fields($result); $i++) {
            echo mysql_field_name($result, $i) . "\t";
        }
        print("\n");
        //end of printing column names  
        //start while loop to get data
        while ($row = mysql_fetch_row($result)) {
            $schema_insert = "";
            for ($j = 0; $j < mysql_num_fields($result); $j++) {
                if (!isset($row[$j]))
                    $schema_insert .= "NULL" . $sep;
                elseif ($row[$j] != "")
                    $schema_insert .= "$row[$j]" . $sep;
                else
                    $schema_insert .= "" . $sep;
            }
            $schema_insert = str_replace($sep . "$", "", $schema_insert);
            $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
            $schema_insert .= "\t";
            print(trim($schema_insert));
            print "\n";
        }
    }

}
