<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login_admin") {
			redirect('Login/C');
		}
	}

	public function apung()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['apung'] = $this->M_apung->tampil_data();
		$this->load->view('admin/apung', $data);
	}

	//fungsi untuk menambah data 
	public function tambah_apg()
	{
		$nama		= $this->input->post('nama');
		$quantity		= $this->input->post('quantity');
		$tgl_produksi	= $this->input->post('tgl_produksi');
		$resep	= $this->input->post('resep');
		$size 	= $this->input->post('size');
		$kavling 		= $this->input->post('kavling');
		$operator 	= $this->input->post('operator');

		//upload foto ke folder
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 5000; // max 5 MB
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			//jika upload berhasil maka isi variabel $foto = file_name
			$foto = $this->upload->data('file_name');
		} else {
			//jika gagal upload maka isi variabel $foto = 'no_image.jpg'
			echo "Upload Gagal";
			$foto = 'no_image.jpg';
		}

		//data yang dikirim harus bertipe array
		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'size' => $size,
			'kavling' => $kavling,
			'operator' => $operator,
			'foto' => $foto
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_apung->input_data('tb_pa', $data);
		redirect('Admin/apung');
	}

	//fungsi untuk menghapus data
	public function hapus_apg($id)
	{
		//ambil data nama file foto berdasarkan id
		$data = $this->M_apung->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path = './assets/foto/';
			//hapus data di folder
			@unlink($path . $data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_apung->hapus_data($id, 'tb_pa');
		redirect('Admin/apung');
	}

	//fungsi untuk merubah data 
	public function edit_apg($id)
	{
		//method yang nanti akan digunakan di model
		//untuk merubah data dari database
		$data['apg'] = $this->M_apung->get_data($id, 'tb_pa');
		$this->load->view('admin/edit_apg', $data);
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function update_apg()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$quantity 		= $this->input->post('quantity');
		$tgl_produksi 	= $this->input->post('tgl_produksi');
		$resep 	= $this->input->post('resep');
		$size 	= $this->input->post('size');
		$kavling 		= $this->input->post('kavling');
		$operator 	= $this->input->post('operator');
		$old_foto	= $this->input->post('old_foto');
		$foto 		= $_FILES['foto']['name'];

		if ($foto == '') { //jika $foto kosong
			$foto = $old_foto;
		} else {
			//upload foto ke folder
			$config['upload_path'] = './assets/foto/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = 5000; // max 5 MB
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) { //jika upload berhasil maka isi variabel $foto = file_name
				$foto = $this->upload->data('file_name');
			} else { //Jika gagal upload maka isi variabel $foto = 'no_image.jpg'
				echo "Upload Gagal";
				$foto = 'no_image.jpg';
			}
			//hapus foto
			if ($old_foto != 'no_image.jpg') { //jika foto bukan 'no_image.jpg' maka hapus
				//lokasi gambar
				$path = './assets/foto/';
				//hapus data di folder
				@unlink($path . $old_foto);
			}
		}

		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'size' => $size,
			'kavling' => $kavling,
			'operator' => $operator,
			'foto' => $foto
		);

		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database PI
		$this->M_apung->update_data($id, $data, 'tb_pa');
		redirect('Admin/apung');
	}

	//fungsi untuk menampilkan detail data 
	public function detail_apg($id)
	{
		$where = array('id' => $id);
		$detail = $this->M_apung->detail_data($where, 'tb_pa');
		$data['detail'] = $detail;
		$this->load->view('admin/detail_apg', $data);
	}

	public function cetak_apg()
	{
		$data['apung'] = $this->M_apung->tampil_data("tb_pa");
		$this->load->view('admin/print_apung', $data);
	}

	public function report_apg()
	{
		$data['apung'] = $this->M_apung->tampil_data("tb_pa");
		$this->load->view('admin/report_apg', $data);
	}


	public function ikan()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database
		$data['ikan'] = $this->M_ikan->apung();
		$this->load->view('admin/ikan', $data);
	}


	//fungsi untuk menambah data 
	public function tambah_ikn()
	{
		$nama		= $this->input->post('nama');
		$quantity		= $this->input->post('quantity');
		$tgl_produksi	= $this->input->post('tgl_produksi');
		$resep	= $this->input->post('resep');
		$size 	= $this->input->post('size');
		$kavling 		= $this->input->post('kavling');
		$operator 	= $this->input->post('operator');

		//upload foto ke folder
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 5000; // max 5 MB
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			//jika upload berhasil maka isi variabel $foto = file_name
			$foto = $this->upload->data('file_name');
		} else {
			//jika gagal upload maka isi variabel $foto = 'no_image.jpg'
			echo "Upload Gagal";
			$foto = 'no_image.jpg';
		}

		//data yang dikirim harus bertipe array
		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'size' => $size,
			'kavling' => $kavling,
			'operator' => $operator,
			'foto' => $foto
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_ikan->input_data('tb_pi', $data);
		redirect('Admin/ikan');
	}

	//fungsi untuk menghapus data
	public function hapus_ikn($id)
	{
		//ambil data nama file foto berdasarkan id
		$data = $this->M_ikan->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path = './assets/foto/';
			//hapus data di folder
			@unlink($path . $data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_ikan->hapus_data($id, 'tb_pi');
		redirect('Admin/ikan');
	}

	//fungsi untuk merubah data 
	public function edit_ikn($id)
	{
		//method yang nanti akan digunakan di model
		//untuk merubah data dari database
		$data['ikn'] = $this->M_ikan->get_data($id, 'tb_pi');
		$this->load->view('admin/edit_ikn', $data);
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function update_ikn()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$quantity 		= $this->input->post('quantity');
		$tgl_produksi 	= $this->input->post('tgl_produksi');
		$resep 	= $this->input->post('resep');
		$size 	= $this->input->post('size');
		$kavling 		= $this->input->post('kavling');
		$operator 	= $this->input->post('operator');
		$old_foto	= $this->input->post('old_foto');
		$foto 		= $_FILES['foto']['name'];

		if ($foto == '') { //jika $foto kosong
			$foto = $old_foto;
		} else {
			//upload foto ke folder
			$config['upload_path'] = './assets/foto/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = 5000; // max 5 MB
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) { //jika upload berhasil maka isi variabel $foto = file_name
				$foto = $this->upload->data('file_name');
			} else { //Jika gagal upload maka isi variabel $foto = 'no_image.jpg'
				echo "Upload Gagal";
				$foto = 'no_image.jpg';
			}
			//hapus foto
			if ($old_foto != 'no_image.jpg') { //jika foto bukan 'no_image.jpg' maka hapus
				//lokasi gambar
				$path = './assets/foto/';
				//hapus data di folder
				@unlink($path . $old_foto);
			}
		}

		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'size' => $size,
			'kavling' => $kavling,
			'operator' => $operator,
			'foto' => $foto
		);

		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_ikan->update_data($id, $data, 'tb_pi');
		redirect('Admin/ikan');
	}

	//fungsi untuk menampilkan detail data 
	public function detail_ikn($id)
	{
		$where = array('id' => $id);
		$detail = $this->M_ikan->detail_data($where, 'tb_pi');
		$data['detail'] = $detail;
		$this->load->view('admin/detail_ikn', $data);
	}

	public function cetak_ikn()
	{
		$data['ikan'] = $this->M_ikan->apung("tb_pi");
		$this->load->view('admin/print_ikan', $data);
	}

	public function report_ikn()
	{
		$data['ikan'] = $this->M_ikan->apung("tb_pi");
		$this->load->view('admin/report_ikn', $data);
	}

	public function udang()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database
		$data['udang'] = $this->M_udang->pakan();
		$this->load->view('admin/udang', $data);
	}
	public function pjadi()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database

		$this->load->view('admin/pjadi');
	}
	public function c()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database

		$this->load->view('admin/C');
	}
	public function contac()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database

		$this->load->view('admin/contac');
	}
	public function qc()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database

		$this->load->view('admin/QC');
	}
	public function gudang()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database
		$data['gudang'] = $this->M_gudang->tampil_data();
		$this->load->view('admin/gudang', $data);
	}
	//fungsi untuk menambah data 
	public function tambah_gdg()
	{
		$nama		= $this->input->post('nama');
		$quantity		= $this->input->post('quantity');
		$tgl_produksi	= $this->input->post('tgl_produksi');
		$expired	= $this->input->post('expired');


		//upload foto ke folder


		//data yang dikirim harus bertipe array
		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'expired' => $expired,


		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_gudang->input_data('tb_pj', $data);
		redirect('Admin/gudang');
	}

	//fungsi untuk menghapus data
	public function hapus_gdg($id)
	{
		//ambil data nama file foto berdasarkan id
		$data = $this->M_gudang->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path = './assets/foto/';
			//hapus data di folder
			@unlink($path . $data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_gudang->hapus_data($id, 'tb_pj');
		redirect('Admin/gudang');
	}

	//fungsi untuk merubah data 
	public function edit_gdg($id)
	{
		//method yang nanti akan digunakan di model
		//untuk merubah data dari database
		$data['gdg'] = $this->M_gudang->get_data($id, 'tb_pj');
		$this->load->view('admin/edit_gdg', $data);
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function update_gdg()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$quantity 		= $this->input->post('quantity');
		$tgl_produksi 	= $this->input->post('tgl_produksi');
		$expired 	= $this->input->post('expired');







		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'expired' => $expired,



		);

		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database PI
		$this->M_gudang->update_data($id, $data, 'tb_pj');
		redirect('Admin/gudang');
	}

	//fungsi untuk menampilkan detail data 
	public function detail_gdg($id)
	{
		$where = array('id' => $id);
		$detail = $this->M_gudang->detail_data($where, 'tb_pj');
		$data['detail'] = $detail;
		$this->load->view('admin/detail_gdg', $data);
	}

	public function cetak_gdg()
	{
		$data['gudang'] = $this->M_gudang->tampil_data("tb_pj");
		$this->load->view('admin/print_gudang', $data);
	}

	public function report_gdg()
	{
		$data['gudang'] = $this->M_gudang->tampil_data("tb_pj");
		$this->load->view('admin/report_gdg', $data);
	}


	public function karantina()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang ada pada database
		$data['karantina'] = $this->M_karantina->tampil_data();
		$this->load->view('admin/karantina', $data);
	}

	//fungsi untuk menambah data 
	public function tambah_krn()
	{
		$nama		= $this->input->post('nama');
		$quantity		= $this->input->post('quantity');
		$tgl_produksi	= $this->input->post('tgl_produksi');
		$resep	= $this->input->post('resep');
		$mesin 	= $this->input->post('mesin');
		$setatus 		= $this->input->post('setatus');
		$keterangan 	= $this->input->post('keterangan');
		$shif 	= $this->input->post('shif');

		//upload foto ke folder


		//data yang dikirim harus bertipe array
		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'mesin' => $mesin,
			'setatus' => $setatus,
			'keterangan' => $keterangan,
			'shif' => $shif,

		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_apung->input_data('tb_krn', $data);
		redirect('Admin/karantina');
	}

	//fungsi untuk menghapus data
	public function hapus_krn($id)
	{
		//ambil data nama file foto berdasarkan id
		$data = $this->M_apung->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path = './assets/foto/';
			//hapus data di folder
			@unlink($path . $data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_apung->hapus_data($id, 'tb_krn');
		redirect('Admin/karantina');
	}

	//fungsi untuk merubah data 
	public function edit_krn($id)
	{
		//method yang nanti akan digunakan di model
		//untuk merubah data dari database
		$data['krn'] = $this->M_karantina->get_data($id, 'tb_krn');
		$this->load->view('admin/edit_krn', $data);
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function update_krn()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$quantity 		= $this->input->post('quantity');
		$tgl_produksi 	= $this->input->post('tgl_produksi');
		$resep 	= $this->input->post('resep');
		$mesin 	= $this->input->post('mesin');
		$setatus		= $this->input->post('setatus');
		$keterangan 	= $this->input->post('keterangan');
		$shif	= $this->input->post('shif');







		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'mesin' => $mesin,
			'setatus' => $setatus,
			'keterangan' => $keterangan,
			'shif' => $shif,


		);

		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database PI
		$this->M_karantina->update_data($id, $data, 'tb_krn');
		redirect('Admin/karantina');
	}

	//fungsi untuk menampilkan detail data 
	public function detail_krn($id)
	{
		$where = array('id' => $id);
		$detail = $this->M_karantina->detail_data($where, 'tb_krn');
		$data['detail'] = $detail;
		$this->load->view('admin/detail_krn', $data);
	}

	public function cetak_krn()
	{
		$data['karantina'] = $this->M_karantina->tampil_data("tb_krn");
		$this->load->view('admin/print_karantina', $data);
	}

	public function report_krn()
	{
		$data['karantina'] = $this->M_karantina->tampil_data("tb_krn");
		$this->load->view('admin/report_krn', $data);
	}

	public function bb()
	{
		//method yang nanti akan digunakan di model 
		//untuk menampilkan data yang adena pada database

		$this->load->view('admin/bb');
	}
	//fungsi untuk menambah data 
	public function tambah_udg()
	{
		$nama		= $this->input->post('nama');
		$quantity		= $this->input->post('quantity');
		$tgl_produksi	= $this->input->post('tgl_produksi');
		$resep	= $this->input->post('resep');
		$size 	= $this->input->post('size');
		$kavling 		= $this->input->post('kavling');
		$operator 	= $this->input->post('operator');

		//upload foto ke folder
		$config['upload_path'] = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 5000; // max 5 MB
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			//jika upload berhasil maka isi variabel $foto = file_name
			$foto = $this->upload->data('file_name');
		} else {
			//jika gagal upload maka isi variabel $foto = 'no_image.jpg'
			echo "Upload Gagal";
			$foto = 'no_image.jpg';
		}

		//data yang dikirim harus bertipe array
		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'size' => $size,
			'kavling' => $kavling,
			'operator' => $operator,
			'foto' => $foto
		);

		//method yang nanti akan digunakan di model 
		//untuk memasukan data ke database
		$this->M_udang->input_data('tb_pu', $data);
		redirect('Admin/udang');
	}

	//fungsi untuk menghapus data
	public function hapus_udg($id)
	{
		//ambil data nama file foto berdasarkan id
		$data = $this->M_udang->get_foto($id);
		//lokasi gambar
		if ($data->foto != 'no_image.jpg') { //jika 	foto bukan 'no_image.jpg' maka hapus
			$path = './assets/foto/';
			//hapus data di folder
			@unlink($path . $data->foto);
		}
		//method yang nanti akan digunakan di model
		//untuk menghapus data dari database
		$this->M_udang->hapus_data($id, 'tb_pu');
		redirect('Admin/udang');
	}

	//fungsi untuk merubah data 
	public function edit_udg($id)
	{
		//method yang nanti akan digunakan di model
		//untuk merubah data dari database
		$data['udg'] = $this->M_udang->get_data($id, 'tb_pu');
		$this->load->view('admin/edit_udg', $data);
	}

	//fungsi untuk memperbaharui/mengupdate data dari database
	public function update_udg()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$quantity 		= $this->input->post('quantity');
		$tgl_produksi 	= $this->input->post('tgl_produksi');
		$resep 	= $this->input->post('resep');
		$size 	= $this->input->post('size');
		$kavling 		= $this->input->post('kavling');
		$operator 	= $this->input->post('operator');
		$old_foto	= $this->input->post('old_foto');
		$foto 		= $_FILES['foto']['name'];

		if ($foto == '') { //jika $foto kosong
			$foto = $old_foto;
		} else {
			//upload foto ke folder
			$config['upload_path'] = './assets/foto/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = 5000; // max 5 MB
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) { //jika upload berhasil maka isi variabel $foto = file_name
				$foto = $this->upload->data('file_name');
			} else { //Jika gagal upload maka isi variabel $foto = 'no_image.jpg'
				echo "Upload Gagal";
				$foto = 'no_image.jpg';
			}
			//hapus foto
			if ($old_foto != 'no_image.jpg') { //jika foto bukan 'no_image.jpg' maka hapus
				//lokasi gambar
				$path = './assets/foto/';
				//hapus data di folder
				@unlink($path . $old_foto);
			}
		}

		$data = array(
			'nama' => $nama,
			'quantity' => $quantity,
			'tgl_produksi' => $tgl_produksi,
			'resep' => $resep,
			'size' => $size,
			'kavling' => $kavling,
			'operator' => $operator,
			'foto' => $foto
		);

		//method yang nanti akan digunakan di model
		//untuk merubah mengapdate data dari database
		$this->M_udang->update_data($id, $data, 'tb_pu');
		redirect('Admin/udang');
	}

	//fungsi untuk menampilkan detail data 
	public function detail_udg($id)
	{
		$where = array('id' => $id);
		$detail = $this->M_udang->detail_data($where, 'tb_pu');
		$data['detail'] = $detail;
		$this->load->view('admin/detail_udg', $data);
	}

	public function cetak_udg()
	{
		$data['udang'] = $this->M_udang->pakan("tb_pu");
		$this->load->view('admin/print_udang', $data);
	}

	public function report_udg()
	{
		$data['udang'] = $this->M_udang->pakan("tb_pu");
		$this->load->view('admin/report_udg', $data);
	}
}
//end of file Admin.php
//location : application\controllers\
