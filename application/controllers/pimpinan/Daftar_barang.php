<?php
class Daftar_barang extends CI_Controller
{

    public function index()
    {
        $this->template->load('template/template_pimpinan', 'pimpinan/daftar_barang/tampil');
    }
}
