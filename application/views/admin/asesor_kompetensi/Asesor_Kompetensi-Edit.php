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
							<label for="nama">Nama Asesor</label>
							<input type="text" id="nama" name="nama" value="<?= $row['nama']; ?>" class="form-control" placeholder="Masukkan Nama Asesor" required="required" autocomplete="off" autofocus="" value="<?= set_value('nama'); ?>">
						</div>
						<div class="form-label-group">
							<label for="nama">Nomor Registrasi</label>
							<input type="text" id="no_registrasi" value="<?= $row['no_registrasi']; ?>" name="no_registrasi" class="form-control" placeholder="Masukkan Nomor Registrasi" required="required" autocomplete="off" autofocus="" value="<?= set_value('no_registrasi'); ?>">
						</div>
						<div class="form-label-group">
							<label for="nama">Asal Sekolah</label>
							<input type="text" id="asal_sekolah" name="asal_sekolah" value="<?= $row['asal_sekolah']; ?>" class="form-control" placeholder="Masukkan Asal Sekolah" required="required" autocomplete="off" autofocus="" value="<?= set_value('asal_sekolah'); ?>">
						</div>
						<div class="form-group">
							<label>Kompetensi</label>
							<select name="id_kompetensi" id="id_kompetensi" class="form-control">
								<?php foreach ($kompetensi as $row2) : ?>
									<option value="<?= $row2['id_kompetensi']; ?>" <?php if ($row['id_kompetensi'] ==  $row2['id_kompetensi']) echo 'selected'; ?>><?= $row2['kompetensi']; ?> (<?= $row2['kompetensi_short']; ?>)</option>
								<?php endforeach ?>
							</select>
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
