<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data bagging</title>
    <?php //Loading head.php
    $this->load->view('admin/templates/head');
    ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                    <h1 align="center">Data Bagging Pakan ikan </h1>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <a class="btn btn-primary" href=" <?php echo base_url('Admin/apung') ?>">Kembali</a>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#inputModal"><i class="fa fa-plus"></i> Tambah Data Pakan</button>
                            <a class="btn btn-danger" href=" <?php echo base_url('Admin/report_ikn') ?>"> <i class="fa fa-print"></i> Export dan Print </a>
                            <!-- /.card -->
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr class="bg-info" align="center">
                                                <th>NO</th>
                                                <th>NAMA PAKAN</th>
                                                <th>QUANTITY</th>
                                                <th>TANGGAL PRODUKSI</th>
                                                <th>RESEP</th>
                                                <th>Detail</th>
                                                <th>Hapus</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($ikan as $ikn) : ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $ikn->nama ?></td>
                                                    <td><?php echo $ikn->quantity ?></td>
                                                    <td><?php echo $ikn->tgl_produksi ?></td>
                                                    <td><?php echo $ikn->resep ?></td>
                                                    <td align="center">
                                                        <a class="btn btn-success btn-sm " href="<?php echo base_url('Admin/detail_ikn/' . $ikn->id) ?>">
                                                            <i class="fa fa-search-plus"></i>
                                                        </a>
                                                    </td>
                                                    <td onclick="javascript: return  confirm('Anda  yakin  hapus?')" align="center">
                                                        <a class="btn btn-danger btn-sm " href="<?php echo base_url('Admin/hapus_ikn/' . $ikn->id) ?>">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                        <a class="btn btn-primary btn-sm " href="<?php echo base_url('Admin/edit_ikn/' . $ikn->id) ?>">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td align="center">
                                                        <!DOCTYPE html>
                                                        <html lang="en">

                                                        <head>
                                                            <meta charset="utf-8">
                                                            <meta name="viewport" content="width=device-width, initial-scale=1">
                                                            <title>Data ikan</title>
                                                            <?php //Loading head.php
                                                            $this->load->view('admin/templates/head');
                                                            ?>
                                                            <!-- DataTables -->
                                                            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
                                                            <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/datatables-responsive/css/responsive.bootstrap4.min.css">
                                                            <link rel="stylesheet" href="<?php echo base_url('assets/plugins') ?>/datatables-buttons/css/buttons.bootstrap4.min.css">
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
                                                                            <h1 align="center">Data ikan</h1>
                                                                        </div>
                                                                    </section>

                                                                    <!-- Main content -->
                                                                    <section class="content">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <a class="btn btn-primary" href=" <?php echo base_url('Admin/ikan') ?>">Kembali</a>
                                                                                    <a target="_blank" class="btn btn-danger" href=" <?php echo base_url('Admin/cetak_ikn') ?>"> <i class="fa fa-print"></i> Print</a>
                                                                                    <!-- /.card -->
                                                                                    <div class="card">
                                                                                        <!-- /.card-header -->
                                                                                        <div class="card-body">
                                                                                            <table id="example1" class="table table-bordered table-striped table-hover">
                                                                                                <thead>
                                                                                                    <tr class="bg-info" align="center">
                                                                                                        <th>NO</th>
                                                                                                        <th>NAMA ikan</th>
                                                                                                        <th>NIM</th>
                                                                                                        <th>TANGGAL LAHIR</th>
                                                                                                        <th>JURUSAN</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <?php
                                                                                                    $no = 1;
                                                                                                    foreach ($ikan as $ikn) : ?>
                                                                                                        <tr>
                                                                                                            <td><?php echo $no++ ?></td>
                                                                                                            <td><?php echo $ikn->nama ?></td>
                                                                                                            <td><?php echo $ikn->quantity ?></td>
                                                                                                            <td><?php echo $ikn->tgl_produksi ?></td>
                                                                                                            <td><?php echo $ikn->resep ?></td>
                                                                                                        </tr>
                                                                                                    <?php endforeach; ?>
                                                                                                </tbody>
                                                                                            </table>
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
                                                                <!-- DataTables  & Plugins -->
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-responsive/js/dataTables.responsive.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/dataTables.buttons.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/jszip/jszip.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/pdfmake/pdfmake.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/pdfmake/vfs_fonts.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.html5.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.print.min.js"></script>
                                                                <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.colVis.min.js"></script>
                                                                <script>
                                                                    $(function() {
                                                                        $("#example1").DataTable({
                                                                            "paging": false,
                                                                            "lengthChange": true,
                                                                            "searching": false,
                                                                            "ordering": false,
                                                                            "responsive": true,
                                                                            "buttons": ["copy", "csv", "excel", "pdf"]
                                                                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                                                                    });
                                                                </script>
                                                        </body>

                                                        </html>

                                                        <a class="btn btn-primary btn-sm " href="<?php echo base_url('Admin/edit_ikn/' . $ikn->id) ?>">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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
        <!-- Modal -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PAKAN</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open_multipart('Admin/tambah_ikn'); ?>
                        <div class="form-group">
                            <label>Nama pakan</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tangga Produksi</label>
                            <input type="date" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Resep</label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kavling</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Operator</label>
                            <input type="text" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Upload Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php //Loading footer.php
        $this->load->view('admin/templates/footer');
        ?>
        <!-- DataTables  & Plugins -->
        <script src="<?php echo base_url('assets/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/jszip/jszip.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/pdfmake/pdfmake.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/pdfmake/vfs_fonts.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url('assets/plugins') ?>/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "responsive": true,
                    "buttons": ["copy", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
</body>

</html>