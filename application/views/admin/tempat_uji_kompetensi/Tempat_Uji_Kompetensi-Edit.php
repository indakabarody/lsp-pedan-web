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
				<h3 class="card-title">Edit</h3>
			</div>
			<div class="card-body">
				<?php foreach ($data as $row) : ?>
				<form class="form-horizontal style-form" method="POST" action="" name="form1" id="form1" enctype="multipart/form-data">
					<div class="form-group">
						<div class="form-group">
							<label for="exampleInputFile">Gambar Lama</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="hidden" name="gambar_lama" id="gambar_lama" value="<?= $row['gambar']; ?>">
									<img src="<?= $asset2."upload/tempat_uji_kompetensi/".$row['gambar']; ?>" alt="" width="100"><br>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Gambar Baru</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile" name="gambar">
									<label class="custom-file-label" for="customFile">Pilih file</label>
								</div>
							</div>
						</div>
						<div class="form-label-group">
							<label for="caption">Caption</label>
							<input type="text" id="caption" name="caption" value="<?= $row['caption']; ?>" class="form-control" placeholder="Masukkan Caption" required="required" autocomplete="off" autofocus="">
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit"></input>
				</form>
				<?php endforeach ?>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
