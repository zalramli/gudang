<?php
class Home extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_kasir','kasir/tampil');
        }
        public function nota()
        {
                $this->load->view('kasir/nota');
        }

}
