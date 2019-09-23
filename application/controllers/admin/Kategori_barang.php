<?php
class Kategori_barang extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_admin','admin/kategori_barang/tampil');
        }
        
        public function add()
        {
                $this->template->load('template/template_admin','admin/kategori_barang/tambah');           
        }
        public function edit()
        {
                $this->template->load('template/template_admin','admin/kategori_barang/edit');
        }

}
