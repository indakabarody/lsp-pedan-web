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
					<div class="form-group">
						<div class="form-label-group">
							<label for="exampleInputFile">Gambar</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile" name="gambar" required>
									<label class="custom-file-label" for="customFile">Pilih file</label>
								</div>
							</div>
						</div>
						<div class="form-label-group">
							<label for="caption">Caption</label>
							<input type="text" id="caption" name="caption" class="form-control" placeholder="Masukkan Caption" required="required" autocomplete="off" autofocus="" value="<?= set_value('caption'); ?>">
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
