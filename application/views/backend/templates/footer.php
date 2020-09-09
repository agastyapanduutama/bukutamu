<!-- <script>
  initSample();
</script> -->


</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b> Develop by <a href="https://github.com/agastyapanduutama" title="github">Agasya Pandu</a></b>  
    </div>
     <strong>Copyright &copy; Kepustakaan LIPI Bandung </strong>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->
<!-- <script src="<?= base_url();?>assets/js/jquery.min.js"></script>
<script src="<?= base_url();?>assets/js/jquery.mask.min.js"></script>
<script src="<?= base_url();?>assets/js/main.js"></script> -->
<!-- jQuery 3 -->
<script src="<?= base_url();?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Datepicker -->
<script src="<?= base_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap datepicker -->
<!-- date-range-picker -->
<script src="<?= base_url()?>assets/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url()?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url();?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url();?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url();?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>assets/admin/dist/js/demo.js"></script>
<!-- page script -->
<!-- <script src="<?=base_url('assets/vendor/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/popper.js/dist/umd/popper.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?=base_url('assets/js/custom.js');?>"></script> -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  });
</script>

<!-- date-range-picker -->
<script src="<?= base_url()?>assets/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url()?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?= base_url()?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/admin/dist/js/demo.js"></script>
<!-- Page script -->

<!-- date-range-picker -->
<script src="<?= base_url()?>assets/admin/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url()?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url()?>assets/admin/bower_components/chart.js/Chart.js"></script>

<script src="<?= base_url() ?>assets/js/<?= (isset($script)) ? $script : "" ?>.js"></script>
<script>


 

     $(document).ready(function () {
                $('#datepicker').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "yyyy-mm-dd",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });

      $(document).ready(function () {
                $('#datepicker1').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "yyyy-mm-dd",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    autoclose: true
                });
            });

   
</script>
  
<script>
  $(function () {
    
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
  
</script>

</body>
</html>
