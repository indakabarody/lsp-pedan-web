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
						<div class="form-label-group">
							<label for="nama">Nama Skema</label>
							<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Skema" required="required" autocomplete="off" autofocus="" value="<?= $row['nama']; ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Gambar Lama</label>
							<div class="input-group">
								<div class="custom-file">
									<img src="<?= $asset2."upload/skema_sertifikasi/".$row['thumb']; ?>" alt="" width="100"><br>
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
						<div class="form-group">
							<label>Kompetensi</label>
							<select name="id_kompetensi" id="id_kompetensi" class="form-control">
								<?php foreach ($kompetensi as $row2) : ?>
									<option value="<?= $row2['id_kompetensi']; ?>" <?php if ($row['id_kompetensi'] ==  $row2['id_kompetensi']) echo 'selected'; ?>><?= $row2['kompetensi']; ?> (<?= $row2['kompetensi_short']; ?>)</option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-label-group">
							<label for="tugas">Deskripsi</label>
							<script src="<?= $asset2; ?>ckeditor/ckeditor.js"></script>
							<textarea class="form-control ckeditor" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
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
