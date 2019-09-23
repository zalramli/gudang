<?php
class Satuan_barang extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_admin','admin/satuan_barang/tampil');
        }
        
        public function add()
        {
                $this->template->load('template/template_admin','admin/satuan_barang/tambah');           
        }
        public function edit()
        {
                $this->template->load('template/template_admin','admin/satuan_barang/edit');
        }

}
