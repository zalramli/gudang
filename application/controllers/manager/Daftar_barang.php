<?php
class Daftar_barang extends CI_Controller
{

    public function index()
    {
        $this->template->load('template/template_manager', 'manager/daftar_barang/tampil');
    }
    public function stock_habis()
    {
        $this->template->load('template/template_manager','manager/daftar_barang/stock_habis');
    }
}
