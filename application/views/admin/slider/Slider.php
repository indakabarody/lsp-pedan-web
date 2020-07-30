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
				<h3 class="card-title"><a href="<?= base_url()."admin/slider/tambah"; ?>" class="btn btn-primary btn-block text-white">Tambah Slider</a></h3>
			</div>
			<div class="card-body">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Slider</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($slider as $row) : ?>
						<tr>
							<td style="width: 5px;"><?= $no++; ?></td>
							<td><img src="<?= $asset2; ?>upload/slider/<?= $row['slider']; ?>" alt="" width="150"></td>
							<td>
								<a href="<?= base_url(); ?>admin/slider/edit/<?= $row['id_slider']; ?>" class="text-success"><i class="fa fa-edit"></i> Edit</a> | 
								<?php if ($row['enabled'] == 1) { ?>
								<a href="<?= base_url(); ?>admin/slider/disable/<?= $row['id_slider']; ?>" class="text-warning"><i class="fa fa-power-off"></i> Nonaktifkan</a> | 
								<?php } else { ?>
								<a href="<?= base_url(); ?>admin/slider/enable/<?= $row['id_slider']; ?>" class="text-success"><i class="fa fa-power-off"></i> Aktifkan</a> | 
								<?php } ?>
								<a href="#" class="text-danger del" data-toggle="modal" data-target="#modal-delete" data-id="<?= $row['id_slider']; ?>"><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>

				<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Hapus Slider</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Yakin ingin menghapus slider?</p>
							</div>
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
								<button type="button" class="btn btn-danger delete" data-table="slider">Ya</button>
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
