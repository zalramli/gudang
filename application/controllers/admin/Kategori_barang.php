<?php
class Kategori_barang extends CI_Controller {

        public function index()
        {
                $this->template->load('template','master/kategori_barang/tampil');
        }
        
        public function add()
        {
                $this->template->load('template','master/kategori_barang/tambah');           
        }

}
