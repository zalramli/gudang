<?php
class Jenis_toko extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_admin','admin/jenis_toko/tampil');
        }
        
        public function add()
        {
                $this->template->load('template/template_admin','admin/jenis_toko/tambah');           
        }
        public function edit()
        {
                $this->template->load('template/template_admin','admin/jenis_toko/edit');
        }

}
