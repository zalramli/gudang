<?php
class Barang_toko extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_gudang','gudang/barang_toko/tampil');
        }
        public function barang_baru()
        {
                $this->template->load('template/template_gudang','gudang/barang_toko/barang_baru');
        }

}
