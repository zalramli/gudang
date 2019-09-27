<?php
class Pengeluaran extends CI_Controller
{

    public function index()
    {
        $this->template->load('template/template_manager', 'manager/pengeluaran/tampil');
    }
    public function add()
    {
    $this->template->load('template/template_manager', 'manager/pengeluaran/tambah');
    }
}
