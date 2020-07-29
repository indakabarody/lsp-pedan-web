<footer class="main-footer">
	<strong>Copyright &copy; <?= date("Y"); ?>
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= $asset2; ?>plugins/jquery/jquery.min.js"></script>
<!-- DataTables -->
<script src="<?= $asset2; ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= $asset2; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= $asset2; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $asset2; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $asset2; ?>dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
	$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
	   });
	});
	
</script>
</body>
</html>
