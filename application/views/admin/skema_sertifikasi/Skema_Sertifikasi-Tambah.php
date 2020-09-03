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
							<label for="nama_skema">Nama Skema</label>
							<input type="text" id="nama_skema" name="nama_skema" class="form-control" placeholder="Masukkan Nama Skema" required="required" autocomplete="off" autofocus="" value="<?= set_value('nama_skema'); ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Gambar</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile" name="gambar">
									<label class="custom-file-label" for="customFile">Pilih file</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Kompetensi</label>
							<select name="id_kompetensi" id="id_kompetensi" class="form-control">
								<?php foreach ($kompetensi as $row) : ?>
									<option value="<?= $row['id_kompetensi']; ?>"><?= $row['kompetensi']; ?> (<?= $row['kompetensi_short']; ?>)</option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-label-group">
							<label for="tugas">Deskripsi</label>
							<script src="<?= $asset2; ?>ckeditor/ckeditor.js"></script>
							<textarea class="form-control ckeditor" name="deskripsi"></textarea>
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
