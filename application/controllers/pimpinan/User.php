<?php
class User extends CI_Controller
{

    public function index()
    {
        $this->template->load('template/template_pimpinan', 'pimpinan/user/tampil');
    }
    public function add()
    {
        $this->template->load('template/template_pimpinan', 'pimpinan/user/tambah');
    }
    public function edit()
    {
        $this->template->load('template/template_pimpinan', 'pimpinan/user/edit');
    }
}
