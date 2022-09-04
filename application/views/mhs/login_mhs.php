<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Informasi Akademik - Login Mahasiswa</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
	  		Login <b>Mahasiswa</b>
	  		</div>
	  	<div class="card">	
	  	  <div class="card-body logim-card-body">
			<form action="<?php echo base_url('Login/validasi_mhs'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="nim" class="form-control" placeholder="NIM">
					<div class="input-group-append">
			            <div class="input-group-text">
			              <span class="fas fa-user"></span>
			            </div>
			        </div>
				</div>
				<div class="input-group mb-3">	 
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
			            <div class="input-group-text">
			              <span class="fas fa-lock"></span>
			            </div>
			        </div>
			    </div>

			    <div class="input-group mb-3">
					<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
				</div>	
			</form>
		  </div>
		</div>
	</div>
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>	
</body>
</html>