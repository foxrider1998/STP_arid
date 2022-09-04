<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_ikan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login_ikn") {
			redirect('Login/ikan');
		}
	}
	public function index()
	{
		$nim = $this->session->userdata('nim');
		$where = array('nim' => $nim);
		$detail = $this->M_ikan->detail_data($where, 'tb_pi');
		$data['detail'] = $detail;
		$this->load->view('ikn/detail_ikn', $data);
	}
}
