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
							<label for="nama_pemegang">Nama Pemegang</label>
							<input type="text" id="nama_pemegang" name="nama_pemegang" class="form-control" placeholder="Masukkan Nama Pemegang Sertifikat" required="required" autocomplete="off" autofocus="" value="<?= set_value('nama_pemegang'); ?>">
						</div>
						<div class="form-label-group">
							<label for="no_sertifikat">Nomor Sertifikat</label>
							<input type="text" id="no_sertifikat" name="no_sertifikat" class="form-control" placeholder="Masukkan Nomor Sertifikat" required="required" autocomplete="off" autofocus="" value="<?= set_value('no_sertifikat'); ?>">
						</div>
						<div class="form-group">
							<label>Skema Sertifikasi</label>
							<select name="id_skema_sertifikasi" id="id_skema_sertifikasi" class="form-control">
								<?php foreach ($skema_sertifikasi as $row2) : ?>
									<option value="<?= $row2['id_skema_sertifikasi']; ?>"><?= $row2['nama_skema']; ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-label-group">
							<label for="tahun">Tahun Sertifikat</label>
							<input type="number" min="0" id="tahun" name="tahun" class="form-control" placeholder="Masukkan Tahun Sertifikat" required="required" autocomplete="off" autofocus="" value="<?= set_value('tahun'); ?>">
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
