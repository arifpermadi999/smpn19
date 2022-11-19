<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view($coreAtas); ?>
  </head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Header -->
  <?php $this->load->view($header); ?>
  <!-- / End Header -->
  
  <?php $this->load->view($sidebar); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $banner ?>
        <small><?php echo $descBanner ?></small>
      </h1>
      <br>
      <script type="text/javascript">
        $(function(){
          setInterval(function() {
            $("#message").hide(300);
          },4000);
        });
      </script>
      <?php if ($this->session->flashdata('alert')) : ?>
        <div class="alert alert-<?= $this->session->flashdata('alert'); ?>" id="message">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php endif; ?>
      <?php $this->load->view($content); ?>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view($footer); ?>
  <!-- / Footer -->

  <!-- Rightbar -->
  <?php $this->load->view($rightBar); ?>  
  <!-- / Rightbar -->
</div>
<!-- ./wrapper -->

  <?php $this->load->view($coreBawah); ?>
  </body>
</html>