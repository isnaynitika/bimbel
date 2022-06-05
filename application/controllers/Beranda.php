<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->simple_login->cek_login();
    }

    public function index()
    {
        $this->load->view('login/index');
    }
}
