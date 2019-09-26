<?php
class Laporan extends CI_Controller
{

    public function index()
    {
        $this->template->load('template/template_manager', 'manager/laporan/tampil');
    }
}
