<?php
class Distributor extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_admin','admin/distributor/tampil');
        }
        public function add()
        {
        $this->template->load('template/template_admin','admin/distributor/tambah');
        }
        public function edit()
        {
        $this->template->load('template/template_admin','admin/distributor/edit');
        }

}
