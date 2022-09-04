<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	//fungsi-fungsi untuk user admin============================================
	public function admin()
	{
		$this->load->view('admin/login_admin');
	}

	public function validasi_admin()
	{ //validasi login
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$select = 'id';
		$where = array('username' => $username, 'password' => md5($password));
		$cek = $this->M_login->cek_login($select, "tb_admin", $where)->num_rows();
		if ($cek > 0) {
			$data_session = array('nama' => $username, 'status' => "login_admin");
			$this->session->set_userdata($data_session);
			echo "sukses";
			redirect(base_url("Admin/C"));
		} else {
			echo "Username dan password salah !";
			redirect(base_url("Login/admin"));
		}
	}
	public function logout_admin()
	{
		redirect(base_url('Login/admin'));
	}

	//fungsi-fungsi untuk user mahasiswa ============================================
	public function mahasiswa()
	{
		$this->session->sess_destroy();
		$this->load->view('mhs/login_mhs');
	}

	public function validasi_mhs()
	{ //validasi login
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		$select = 'id';
		$where = array('nim' => $nim, 'password' => md5($password));
		$cek = $this->M_login->cek_login($select, "tb_mahasiswa", $where)->num_rows();
		if ($cek > 0) {
			$data_session = array('nim' => $nim, 'status' => "login_mhs");
			$this->session->set_userdata($data_session);
			echo "login sukses";
			redirect(base_url("C_mahasiswa/index"));
		} else {
			echo "NIM dan password salah !";
			redirect(base_url("Login/mahasiswa"));
		}
	}
	public function logout_mhs()
	{
		redirect(base_url('Login/mahasiswa'));
	}
}

//end of file Login.php
//location : application\controllers\