<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data iudang</title>
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
                    <h1 align="center">Update Data Pakan udang</h1>
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
                                    <?php echo form_open_multipart('Admin/update_udg'); ?>
                                    <div class="form-group">
                                        <label>Nama Pakan</label>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $udg->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $udg->nama ?>">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" name="quantity" class="form-control" value="<?php echo $udg->quantity ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Produksi</label>
                                            <input type="date" name="tgl_produksi" class="form-control" value="<?php echo $udg->tgl_produksi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Resep</label>
                                            <input type="text" name="resep" class="form-control" value="<?php echo $udg->resep ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" name="size" class="form-control" value="<?php echo $udg->size ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Kavling</label>
                                            <input type="text" name="kavling" class="form-control" value="<?php echo $udg->kavling ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Operator</label>
                                            <input type="text" name="operator" class="form-control" value="<?php echo $udg->operator ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label><br>
                                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $udg->foto; ?>" width="90" height="110"><br>
                                            <label><?php echo $udg->foto; ?></label>
                                            <input type="hidden" name="old_foto" class="form-control" value="<?php echo $udg->foto; ?>">
                                            <input type="file" name="foto" class="form-control">

                                        </div>
                                        <a href="<?php echo base_url('Admin/udang'); ?>" class=" btn btn-primary">Kembali</a>
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
            <h1 align="center">Update Data Pakan udang</h1>
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
                            <?php echo form_open_multipart('Admin/update_udang'); ?>
                            <div class="form-group">
                                <label>Nama udang</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $udg->id ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $udg->nama ?>">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" name="nim" class="form-control" value="<?php echo $udg->nim ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $udg->tgl_lahir ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" value="<?php echo $udg->jurusan ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?php echo $udg->alamat ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $udg->email ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="no_telp" class="form-control" value="<?php echo $udg->no_telp ?>">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label><br>
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $udg->foto; ?>" width="90" height="110"><br>
                                    <label><?php echo $udg->foto; ?></label>
                                    <input type="hidden" name="old_foto" class="form-control" value="<?php echo $udg->foto; ?>">
                                    <input type="file" name="foto" class="form-control">

                                </div>
                                <a href="<?php echo base_url('Admin/udang'); ?>" class=" btn btn-primary">Kembali</a>
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