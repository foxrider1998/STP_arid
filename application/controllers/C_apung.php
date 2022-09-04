<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_apung extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login_apg") {
			redirect('Login/apung');
		}
	}
	public function index()
	{
		$nim = $this->session->userdata('nim');
		$where = array('nim' => $nim);
		$detail = $this->M_apung->detail_data($where, 'tb_apung');
		$data['detail'] = $detail;
		$this->load->view('apg/detail_apg', $data);
	}
}
