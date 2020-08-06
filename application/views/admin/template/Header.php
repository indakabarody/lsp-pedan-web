<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?= $judul; ?> - LSP SMKN 1 Pedan (Admin)</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="shortcut icon" href="<?= $asset2; ?>dist/img/PanicButtonLogo.png"> -->
		<!-- DataTables -->
		<link rel="stylesheet" href="<?= $asset2; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= $asset2; ?>plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= $asset2; ?>dist/css/adminlte.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<span class="hidden-xs">Administrator</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-logout">
						<i class="fas fa-sign-out-alt mr-2"></i> Log Out
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url()."admin"; ?>" class="brand-link bg-primary">
			<!-- <img src="<?= $asset2; ?>dist/img/PanicButtonLogo.png"
				alt="AdminLTE Logo"
				class="brand-image img-circle elevation-3"
				style="opacity: .8"> -->
			<span class="brand-text font-weight-light">LSP SMKN 1 Pedan</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
							with font-awesome or any other icon font library -->
						<li class="nav-header">MENU</li>
						<li class="nav-item">
							<a href="<?= base_url()."admin"; ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Pengaturan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url()."admin/slider"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Slider</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Tentang
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url()."admin/profil"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Profil</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url()."admin/visi-misi"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Visi Misi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url()."admin/struktur-organisasi"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Struktur Organisasi</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Sertifikasi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url()."admin/skema-sertifikasi"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Skema Sertifikasi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url()."admin/asesor-kompetensi"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Asesor Kompetensi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url()."admin/tempat-uji-kompetensi"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Tempat Uji Kompetensi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url()."admin/pemegang-sertifikat"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Pemegang Sertifikat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url()."admin/smk-jejaring-kerja"; ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Jejaring Kerja</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- /.navbar -->

		<div class="modal fade" id="modal-logout">
			<div class="modal-dialog modal-default">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Konfirmasi Log Out</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Anda yakin ingin log out?</p>
						<input type="text" class="form-control" id="idUser" name="idUser" hidden>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
						<a href="<?= base_url()."logout"; ?>" class="btn btn-primary">Ya</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
