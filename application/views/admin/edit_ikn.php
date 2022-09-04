<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data iikan</title>
  <?php //Loading head.php
  $this->load->view('admin/templates/head');
  ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php //Loading navbar.php
    $this->load->view('admin/templates/navbar');
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php //Loading sidebar.php
    $this->load->view('admin/templates/sidebar');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="col-sm-12">
          <h1 align="center">Update Data Pakan ikan</h1>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <?php echo form_open_multipart('Admin/update_ikn'); ?>
                  <div class="form-group">
                    <label>Nama Pakan</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $ikn->id ?>">
                    <input type="text" name="nama" class="form-control" value="<?php echo $ikn->nama ?>">
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="text" name="quantity" class="form-control" value="<?php echo $ikn->quantity ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Produksi</label>
                      <input type="date" name="tgl_produksi" class="form-control" value="<?php echo $ikn->tgl_produksi ?>">
                    </div>
                    <div class="form-group">
                      <label>Resep</label>
                      <input type="text" name="resep" class="form-control" value="<?php echo $ikn->resep ?>">
                    </div>
                    <div class="form-group">
                      <label>Size</label>
                      <input type="text" name="size" class="form-control" value="<?php echo $ikn->size ?>">
                    </div>
                    <div class="form-group">
                      <label>Kavling</label>
                      <input type="text" name="kavling" class="form-control" value="<?php echo $ikn->kavling ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Operator</label>
                      <input type="text" name="operator" class="form-control" value="<?php echo $ikn->operator ?>">
                    </div>
                    <div class="form-group">
                      <label>Foto</label><br>
                      <img src="<?php echo base_url(); ?>assets/foto/<?php echo $ikn->foto; ?>" width="90" height="110"><br>
                      <label><?php echo $ikn->foto; ?></label>
                      <input type="hidden" name="old_foto" class="form-control" value="<?php echo $ikn->foto; ?>">
                      <input type="file" name="foto" class="form-control">

                    </div>
                    <a href="<?php echo base_url('Admin/ikan'); ?>" class=" btn btn-primary">Kembali</a>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                  <?php echo form_close(); ?>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php //Loading footer.php
    $this->load->view('admin/templates/footer');
    ?>

</body>

</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="col-sm-12">
      <h1 align="center">Update Data Pakan ikan</h1>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <?php echo form_open_multipart('Admin/update_ikan'); ?>
              <div class="form-group">
                <label>Nama ikan</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $ikn->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $ikn->nama ?>">
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim" class="form-control" value="<?php echo $ikn->nim ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $ikn->tgl_lahir ?>">
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" value="<?php echo $ikn->jurusan ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $ikn->alamat ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $ikn->email ?>">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="no_telp" class="form-control" value="<?php echo $ikn->no_telp ?>">
                </div>
                <div class="form-group">
                  <label>Foto</label><br>
                  <img src="<?php echo base_url(); ?>assets/foto/<?php echo $ikn->foto; ?>" width="90" height="110"><br>
                  <label><?php echo $ikn->foto; ?></label>
                  <input type="hidden" name="old_foto" class="form-control" value="<?php echo $ikn->foto; ?>">
                  <input type="file" name="foto" class="form-control">

                </div>
                <a href="<?php echo base_url('Admin/ikan'); ?>" class=" btn btn-primary">Kembali</a>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              <?php echo form_close(); ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php //Loading footer.php
$this->load->view('admin/templates/footer');
?>

</body>

</html>