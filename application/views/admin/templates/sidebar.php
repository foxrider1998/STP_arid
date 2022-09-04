  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <h2>STP AF PWK</h2>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/STP.jpg" class="img-circle" alt="User Image" />
        </div>
        <div class="info">
          <a href="#" class="d-block"><b>PT.SURI TANI PEMUKA</b></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               <br /> with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Laporan Bagging
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() . 'Admin/apung'; ?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>laporan apung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() . 'Admin/ikan'; ?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>laporan ikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() . 'Admin/udang'; ?>" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>laporan udang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Admin/C'; ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              Pakan arid
            </a>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Admin/karantina'; ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              Pakan karantina
            </a>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Admin/pjadi'; ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              stok gudang jadi
            </a>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Admin/bb'; ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              stok bahan baku
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Admin/gudang'; ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              gudang
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() . 'Login/admin'; ?>" class="nav-link">
              <i class="nav-icon fa fa-share"></i>
              Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>