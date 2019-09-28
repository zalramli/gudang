<?php
class Settings extends CI_Controller {

        public function index()
        {
                $this->template->load('template/template_admin','admin/settings/edit');
        }

}
