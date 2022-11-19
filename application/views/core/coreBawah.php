<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('assets') ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/numeral/numeral.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets') ?>/dist/js/app.min.js"></script>
<!-- Data Tables -->
<script type="text/javascript" src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(function () {
    $("#tablePertama").dataTable();
    $("#tableKedua").dataTable();
    $("#compose-textarea").wysihtml5();
    $("#compose-textarea-add").wysihtml5();
  });
</script>