  <script src="<?=base_url()?>assets/admin/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/jquery.toast.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>assets/admin/js/bootstrap-timepicker.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url()?>assets/admin/js/demo.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  
<script type="text/javascript">
    $(document).ready(function() {
      $('.timepicker1').timepicker({
        showInputs: false,
        defaultTime: 'value',
        minuteStep: 1,
        disableFocus: true,
        template: 'dropdown',
        showMeridian:false
      })
      $('.timepicker2').timepicker({
        showInputs: false,
        defaultTime: 'value',
        minuteStep: 1,
        disableFocus: true,
        template: 'dropdown',
        showMeridian:false
      });
      $('#table_user').DataTable();
    });
      </script>
  </body>
</html>
