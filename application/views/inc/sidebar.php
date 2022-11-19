<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/icon/user.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('full_name'); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level'); ?></a>
        </div>
      </div>

      <!-- search form (Optional) -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?= base_url('C_home') ?>"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>
        <!--<li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('C_home/users') ?>"><i class="fa fa-users"></i> Data Users</a></li>
            <li><a href="<?php echo base_url('C_home/teachers') ?>"><i class="fa fa-users"></i> Data Guru</a></li>
            <li><a href="<?php echo base_url('C_home/events') ?>"><i class="fa fa-list"></i> Kesiswaan</a></li>
            <li><a href="<?php echo base_url('C_home/infos') ?>"><i class="fa fa-newspaper-o"></i> Kurikulum</a></li>
            <li><a href="<?php echo base_url('C_home/profile_sp') ?>"><i class="fa fa-plane"></i> Sarana dan Prasarana</a></li>
            <li><a href="<?php echo base_url('C_home/image_category') ?>"><i class="fa fa-cog"></i> Data Kategori Gambar</a></li>
          </ul>
        </li>-->
        <li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>PROFIL</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('C_home/visi') ?>"><i class="fa fa-file"></i> VISI MISI</a></li>
            <li><a href="<?= base_url('C_home/struktur') ?>"><i class="fa fa-file"></i> STRUKTUR</a></li>
            <li><a href="<?= base_url('C_home/guru') ?>"><i class="fa fa-file"></i> GURU</a></li>
            <li><a href="<?= base_url('C_home/tu') ?>"><i class="fa fa-file"></i> TATA USAHA</a></li>
            <li><a href="<?= base_url('C_home/sarana') ?>"><i class="fa fa-file"></i> SARANA</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('C_home/sliders') ?>"><i class="fa fa-image"></i> SLIDER </a></li>
        <li class=""><a href="<?= base_url('C_home/gallery') ?>"><i class="fa fa-image"></i> <span>GALERI FOTO</span></a></li>
        <li class=""><a href="<?= base_url('C_home/videos') ?>"><i class="fa fa-play"></i> <span>GALERI VIDEO</span></a></li>
        <!-- <li class=""><a href="<?= base_url('C_home/graduated') ?>"><i class="fa fa-users"></i> <span>Data Alumni</span></a></li> -->
        <!-- <li class=""><a href="<?= base_url('C_home/modules') ?>"><i class="fa fa-files-o"></i> <span>Data Modules</span></a></li> -->
        <li class=""><a href="<?= base_url('C_home/blogs') ?>"><i class="fa fa-gear"></i> <span>INFORMASI</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>APLIKASI</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li class=""><a href="<?= base_url('C_home/raportpas') ?>"><i class="fa fa-gear"></i> <span>RAPORT</span></a></li>
            <li><a href="<?= base_url('C_home/tryout') ?>"><i class="fa fa-file"></i> TRYOUT</a></li>
            <li><a href="<?= base_url('C_home/legger_nilai') ?>"><i class="fa fa-file"></i> LEGGER NILAI</a></li>
            <li><a href="<?= base_url('C_home/kelulusan') ?>"><i class="fa fa-file"></i> KELULUSAN</a></li>
            <li><a href="<?= base_url('C_home/siswa') ?>"><i class="fa fa-users"></i> SKKB</a></li>
            <li><a href="<?= base_url('C_home/ppdb') ?>"><i class="fa fa-file"></i> PPDB</a></li>
            <!--<li><a href="<?= base_url('C_home/kepegawaian') ?>"><i class="fa fa-file"></i> Data Kepegawaian</a></li>-->
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>RAPORT PTS</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('C_home/raport') ?>"><i class="fa fa-file"></i> Raport Kelas 7</a></li>
            <li><a href="<?= base_url('C_home/raport8') ?>"><i class="fa fa-file"></i> Raport Kelas 8</a></li>
            <li><a href="<?= base_url('C_home/raport9') ?>"><i class="fa fa-file"></i> Raport Kelas 9</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>DATA PESERTA UJIAN</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('C_home/ujian') ?>"><i class="fa fa-file"></i> Kelas 7</a></li>
            <li><a href="<?= base_url('C_home/ujian8') ?>"><i class="fa fa-file"></i> Kelas 8</a></li>
            <li><a href="<?= base_url('C_home/ujian9') ?>"><i class="fa fa-file"></i> Kelas 9</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-database"></i> <span>LINK SOAL UJIAN</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('C_home/data_linkujian/7') ?>"><i class="fa fa-file"></i> Kelas 7</a></li>
            <li><a href="<?= base_url('C_home/data_linkujian/8') ?>"><i class="fa fa-file"></i> Kelas 8</a></li>
            <li><a href="<?= base_url('C_home/data_linkujian/9') ?>"><i class="fa fa-file"></i> Kelas 9</a></li>
          </ul>
        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>