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
				<h3 class="card-title"><a href="<?= base_url()."admin/skema-sertifikasi/tambah"; ?>" class="btn btn-primary btn-block text-white">Tambah</a></h3>
			</div>
			<div class="card-body">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Skema</th>
							<th>Kompetensi</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($skema_sertifikasi as $row) : ?>
						<tr>
							<td style="width: 5px;"><?= $no++; ?></td>
							<td><?= $row['nama']; ?></td>
							<td><?= $row['kompetensi_short']; ?></td>
							<td><img src="<?= $asset2; ?>upload/skema_sertifikasi/<?= $row['gambar']; ?>" alt="" width="100"></td>
							<td>
								<a href="<?= base_url(); ?>admin/skema-sertifikasi/edit/<?= $row['id_skema_sertifikasi']; ?>" class="text-success"><i class="fa fa-edit"></i> Edit</a> | 
								<a href="#" class="text-danger del" data-toggle="modal" data-target="#modal-delete" data-id="<?= $row['id_skema_sertifikasi']; ?>"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>

				<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Hapus</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Yakin ingin menghapus? Semua data yang berhubungan dengan skema ini juga akan ikut terhapus.</p>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
								<button type="button" class="btn btn-danger delete" data-table="skema-sertifikasi">Ya</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
