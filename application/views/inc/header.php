 <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>v.0.1</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Apps</b>-v.0.1</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo site_url('C_login/lockScreen') ?>" title="Lock Screen"><i class="fa fa-desktop"></i></a>
          </li>
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('assets/images/icon/user.jpg') ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/icon/user.jpg') ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->userdata('full_name').' - '.$this->session->userdata('level'); ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="<?php echo base_url('C_home/profile') ?>" class="btn bg-purple btn-flat"><i class="fa fa-user"></i> Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="#modalLogout" data-toggle="modal" class="btn bg-maroon btn-flat"><i class="fa fa-sign-out"></i> Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-question-circle"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="modal fade" id="modalLogout">
    <div class="modal-dialog" style="margin-top:200px;width:30%;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Anda yakin ingin log out ?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
          <a href="<?php echo site_url('C_login/logout') ?>" class="btn btn-flat bg-maroon"><i class="fa fa-sign-out"></i> Log out</a>
        </div>
      </div>
    </div>
  </div>