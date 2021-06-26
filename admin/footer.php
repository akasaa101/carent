<!-- /*ÜSTBTN -->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!-- ÜSTBTN/* -->
<!-- /*JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/sidebar-menu.js"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script src="assets/js/app-script.js"></script>
<script src="assets/plugins/Chart.js/Chart.min.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/js/index3.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

<script>
 $(document).ready(function() {
      //Default data table
      $('#default-datatable').DataTable();


      var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
      
      table.buttons().container()
      .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
    } );

  </script>
  <!-- js*/ -->
</body>
</html>
