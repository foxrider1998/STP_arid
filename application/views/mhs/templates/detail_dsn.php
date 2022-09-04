<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Mahasiswa</title>
    <?php //Loading head.php
    $this->load->view('mhs/templates/head');
    ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php //Loading navbar.php
        $this->load->view('mhs/templates/navbar');
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php //Loading sidebar.php
        $this->load->view('mhs/templates/sidebar');
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="col-sm-12">
                    <h1 align="center">Detail Data Mahasiswa</h1>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <!-- /.card -->
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td>:</td>
                                            <td><?php echo $detail->nama ?></td>
                                        </tr>
                                        <tr>
                                            <th>NIM</th>
                                            <td>:</td>
                                            <td><?php echo $detail->nim ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>:</td>
                                            <td><?php echo $detail->tgl_lahir ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jurusan</th>
                                            <td>:</td>
                                            <td><?php echo $detail->jurusan ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>:</td>
                                            <td><?php echo $detail->alamat ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td><?php echo $detail->email ?></td>
                                        </tr>
                                        <tr>
                                            <th>No. Telepon</th>
                                            <td>:</td>
                                            <td><?php echo $detail->no_telp ?></td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td>:</td>
                                            <td>
                                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->foto; ?>" width="90" height="110">
                                            </td>
                                        </tr>
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
        $this->load->view('mhs/templates/footer');
        ?>

</body>

</html>