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
				<form class="form-horizontal style-form" method="POST" action="" name="form1" id="form1" enctype="multipart/form-data">
					<div class= "form-group">
						<input type="hidden" name="id_profil" value="<?= $data['id_profil'] ?? ''; ?>">
						<script src="<?= $asset2; ?>ckeditor/ckeditor.js"></script>
						<label class="control-label">Text</label>
						<textarea class="form-control ckeditor" name="text"><?= $data['text'] ?? ''; ?></textarea>
						<br>
						<input type="submit" class="btn btn-success btn-block" name="submit" value="Submit"></input>
					</div>
				</form>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
