<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Data karantina</title>
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
          <h1 align="center">Detail Data karantina</h1>
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
                      <th>Nama pakan </th>
                      <td>:</td>
                      <td><?php echo $detail->nama ?></td>
                    </tr>
                    <tr>
                      <th>Quantity</th>
                      <td>:</td>
                      <td><?php echo $detail->quantity ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Produksi</th>
                      <td>:</td>
                      <td><?php echo $detail->tgl_produksi ?></td>
                    </tr>
                    <tr>
                      <th>Resep</th>
                      <td>:</td>
                      <td><?php echo $detail->resep ?></td>
                    </tr>
                    <tr>
                      <th>mesin</th>
                      <td>:</td>
                      <td><?php echo $detail->mesin ?></td>
                    </tr>
                    <tr>
                      <th>setatus</th>
                      <td>:</td>
                      <td><?php echo $detail->setatus ?></td>
                    </tr>
                    <tr>
                      <th>Nama keterangan</th>
                      <td>:</td>
                      <td><?php echo $detail->keterangan ?></td>
                    </tr>
                    <tr>
                      <th>shif & grup</th>
                      <td>:</td>
                      <td><?php echo $detail->shif ?></td>
                    </tr>


                  </table>
                  <a href="<?php echo base_url('Admin/karantina'); ?>" class=" btn btn-primary">Kembali</a>
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