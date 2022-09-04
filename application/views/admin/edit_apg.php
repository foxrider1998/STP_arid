<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data iapung</title>
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
                    <h1 align="center">Update Data Pakan apung</h1>
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
                                    <?php echo form_open_multipart('Admin/update_apg'); ?>
                                    <div class="form-group">
                                        <label>Nama Pakan</label>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $apg->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $apg->nama ?>">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" name="quantity" class="form-control" value="<?php echo $apg->quantity ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Produksi</label>
                                            <input type="date" name="tgl_produksi" class="form-control" value="<?php echo $apg->tgl_produksi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Resep</label>
                                            <input type="text" name="resep" class="form-control" value="<?php echo $apg->resep ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" name="size" class="form-control" value="<?php echo $apg->size ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kavling</label>
                                            <input type="text" name="kavling" class="form-control" value="<?php echo $apg->kavling ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Operator</label>
                                            <input type="text" name="operator" class="form-control" value="<?php echo $apg->operator ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label><br>
                                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $apg->foto; ?>" width="90" height="110"><br>
                                            <label><?php echo $apg->foto; ?></label>
                                            <input type="hidden" name="old_foto" class="form-control" value="<?php echo $apg->foto; ?>">
                                            <input type="file" name="foto" class="form-control">

                                        </div>
                                        <a href="<?php echo base_url('Admin/apung'); ?>" class=" btn btn-primary">Kembali</a>
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
            <h1 align="center">Update Data Pakan apung</h1>
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
                            <?php echo form_open_multipart('Admin/update_apung'); ?>
                            <div class="form-group">
                                <label>Nama apung</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $apg->id ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $apg->nama ?>">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" name="nim" class="form-control" value="<?php echo $apg->nim ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $apg->tgl_lahir ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" value="<?php echo $apg->jurusan ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $apg->alamat ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $apg->email ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="no_telp" class="form-control" value="<?php echo $apg->no_telp ?>">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label><br>
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $apg->foto; ?>" width="90" height="110"><br>
                                    <label><?php echo $apg->foto; ?></label>
                                    <input type="hidden" name="old_foto" class="form-control" value="<?php echo $apg->foto; ?>">
                                    <input type="file" name="foto" class="form-control">

                                </div>
                                <a href="<?php echo base_url('Admin/apung'); ?>" class=" btn btn-primary">Kembali</a>
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