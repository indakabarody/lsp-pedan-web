<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Log In - LSP SMKN 1 Pedan</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- site icons -->
		<link rel="icon" href="<?php echo base_url(); ?>asset/images/lsp-circle.png" type="image/png" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= $asset2; ?>plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- icheck bootstrap -->
		<link rel="stylesheet" href="<?= $asset2; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= $asset2; ?>dist/css/adminlte.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="<?= base_url(); ?>"><b>LSP</b> SMKN 1 Pedan</a>
			</div>
			<!-- /.login-logo -->
			<div class="card">
				<div class="card-body login-card-body">
					<p class="login-box-msg">Login untuk melanjutkan</p>
					<form action="" method="post">
						<div class="input-group mb-3">
							<select name="role" id="role" class="form-control">
								<option value="admin">Masuk sebagai Admin</option>
								<option value="asesor">Masuk sebagai Asesor</option>
								<option value="peserta" selected>Masuk sebagai Peserta</option>
							</select>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Login</button>
							</div>
							<!-- /.col -->
						</div>
						<div class="row mt-3">
							<div class="col-12 text-danger text-center">
								<?= form_error('username'); ?>
								<?= form_error('password'); ?>
							</div>
							<!-- /.col -->
						</div>
					</form>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->
		<!-- jQuery -->
		<script src="<?= $asset2; ?>plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= $asset2; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= $asset2; ?>dist/js/adminlte.min.js"></script>
	</body>
</html>
