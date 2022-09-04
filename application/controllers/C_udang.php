<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_udang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login_udg") {
            redirect('Login/udang');
        }
    }
    public function index()
    {
        $nim = $this->session->userdata('nim');
        $where = array('nim' => $nim);
        $detail = $this->M_udang->detail_data($where, 'tb_pu');
        $data['detail'] = $detail;
        $this->load->view('udg/detail_udg', $data);
    }
}
