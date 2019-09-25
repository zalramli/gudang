<?php
class Toko extends CI_Controller
{

    public function index()
    {
        $this->template->load('wizard/template', 'wizard/konten/v_toko.php');
    }

    public function add()
    {
        $this->template->load('template/template_pimpinan', 'pimpinan/toko/tambah');
    }
    public function edit()
    {
        $this->template->load('template/template_pimpinan', 'pimpinan/toko/edit');
    }
}
