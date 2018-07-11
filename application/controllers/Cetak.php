<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Cetak extends CI_Controller {
    
        public function __construct(){
            parent::__construct();
            $this->load->model('cetak_model');
            $this->load->library('dompdf_gen');
            $this->load->helper('file');
        }

        public function index()
        {

        }
    
    }
    
    /* End of file Cetak.php */
    
?>