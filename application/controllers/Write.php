<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Write extends CI_Controller
{

    public function index()
    {
        $data['title'] = "FTIK | UNIKOM";
        $this->load->view('write/index', $data);
    }
}
