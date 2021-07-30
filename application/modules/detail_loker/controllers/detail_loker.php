<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_loker extends MY_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('konten');
        $this->load->view('footer');
    }
}