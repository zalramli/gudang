<?php
class Barang_global extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_admin','admin/barang_global/tampil');
        }
        
        public function add()
        {
                $this->template->load('template/template_admin','admin/barang_global/tambah');           
        }
        public function edit()
        {
                $this->template->load('template/template_admin','admin/barang_global/edit');
        }

}
