<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $judul; ?></h1>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Tambah</h3>
			</div>
			<div class="card-body">
			<form class="form-horizontal style-form" method="POST" action="" name="form1" id="form1" enctype="multipart/form-data">
			<input type="hidden" name="id_skema_sertifikasi" value="<?= $id_skema_sertifikasi ?>">
					<div class="form-group">
						<div class="form-group">
							<label for="nama">Kode Unit</label>
							<input type="text" id="kode_unit" name="kode_unit" class="form-control" placeholder="Masukkan Kode Unit" required="required" autocomplete="off" autofocus="" value="<?= set_value('kode_unit'); ?>">
						</div>
						<div class="form-group">
							<label for="nama">Judul Unit Kompetensi</label>
							<input type="text" id="judul" name="judul" class="form-control" placeholder="Masukkan Judul" required="required" autocomplete="off" autofocus="" value="<?= set_value('judul'); ?>">
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit"></input>
				</form>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
