  <!-- footer content -->
  <footer>
    <div class="pull-right">
      Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('asset'); ?>/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('asset'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('asset'); ?>/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url('asset'); ?>/vendors/nprogress/nprogress.js"></script>

  <!-- iCheck -->
  <script src="<?= base_url('asset'); ?>/vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?= base_url('asset'); ?>/vendors/moment/min/moment.min.js"></script>
  <script src="<?= base_url('asset'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap-datetimepicker -->
  <script src="<?= base_url('asset'); ?>/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <!-- Ion.RangeSlider -->
  <script src="<?= base_url('asset'); ?>/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
  <!-- Bootstrap Colorpicker -->
  <script src="<?= base_url('asset'); ?>/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- jquery.inputmask -->
  <script src="<?= base_url('asset'); ?>/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
  <!-- jQuery Knob -->
  <script src="<?= base_url('asset'); ?>/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- Cropper -->
  <script src="<?= base_url('asset'); ?>/vendors/cropper/dist/cropper.min.js"></script>



  <!-- Custom Theme Scripts -->
  <script src="<?= base_url('asset'); ?>/build/js/custom.min.js"></script>
  <!-- Initialize datetimepicker -->
  <script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
      format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
      format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
      ignoreReadonly: true,
      allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
      useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
      $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
      $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
  </script>
  </body>

  </html>