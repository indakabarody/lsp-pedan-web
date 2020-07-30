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
				<h3 class="card-title">Upload Slider</h3>
			</div>
			<div class="card-body">
				<?php if (isset($error)) : ?>
					<div class="alert alert-danger">
						<?= $error; ?>
					</div>
				<?php endif ?>
				<form class="form-horizontal style-form" method="POST" action="" name="form1" id="form1" enctype="multipart/form-data">
					<div class= "form-group">
						<label class="control-label">Slider</label><br>
						<input type="file" class="" name="slider"><br><br>
						<input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit"></input>
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
