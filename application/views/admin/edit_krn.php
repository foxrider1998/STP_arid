<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data ikarantina</title>
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
                    <h1 align="center">Update Data Pakan karantina</h1>
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
                                    <?php echo form_open_multipart('Admin/update_krn'); ?>
                                    <div class="form-group">
                                        <label>Nama Pakan</label>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $krn->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $krn->nama ?>">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" name="quantity" class="form-control" value="<?php echo $krn->quantity ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Produksi</label>
                                            <input type="date" name="tgl_produksi" class="form-control" value="<?php echo $krn->tgl_produksi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Resep</label>
                                            <input type="text" name="resep" class="form-control" value="<?php echo $krn->resep ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>mesin</label>
                                            <input type="text" name="mesin" class="form-control" value="<?php echo $krn->mesin ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>setatus</label>
                                            <input type="text" name="setatus" class="form-control" value="<?php echo $krn->setatus ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" value="<?php echo $krn->keterangan ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>shif & grup</label>
                                            <input type="text" name="shif" class="form-control" value="<?php echo $krn->shif ?>">
                                        </div>

                                        <a href="<?php echo base_url('Admin/karantina'); ?>" class=" btn btn-primary">Kembali</a>
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
            <h1 align="center">Update Data Pakan karantina</h1>
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
                            <?php echo form_open_multipart('Admin/update_karantina'); ?>
                            <div class="form-group">
                                <label>Nama karantina</label>
                                <input type="hidden" name="id" class="form-control" value="<?php echo $krn->id ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $krn->nama ?>">
                                <div class="form-group">
                                    <label>quantity</label>
                                    <input type="text" name="quantity" class="form-control" value="<?php echo $krn->quantity ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Produksi</label>
                                    <input type="date" name="tgl_produksi" class="form-control" value="<?php echo $krn->tgl_produksi ?>">
                                </div>
                                <div class="form-group">
                                    <label>resep</label>
                                    <input type="text" name="resep" class="form-control" value="<?php echo $krn->resep ?>">
                                </div>
                                <div class="form-group">
                                    <label>setatus</label>
                                    <input type="text" name="setatus" class="form-control" value="<?php echo $krn->setatus ?>">
                                </div>
                                <div class="form-group">
                                    <label>keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" value="<?php echo $krn->keterangan ?>">
                                </div>
                                <div class="form-group">
                                    <label>shif & grup</label>
                                    <input type="text" name="shif" class="form-control" value="<?php echo $krn->shif ?>">
                                </div>

                                <a href="<?php echo base_url('Admin/karantina'); ?>" class=" btn btn-primary">Kembali</a>
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