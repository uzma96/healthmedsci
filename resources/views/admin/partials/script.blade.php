<!-- jQuery 3 -->
<script src="assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- Slimscroll -->
<script src="assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
{{--<script src="assets/admin/bower_components/fastclick/lib/fastclick.js"></script>--}}
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>

<script>
    if($('#dataTable').length){
        $('#dataTable').DataTable()
    }
</script>

