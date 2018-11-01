<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url(); ?>" class="navbar-brand"><b>GIZI</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-bars"></i> Master Data <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>kecamatan">Kecamatan</a></li>
                <li><a href="<?php echo base_url(); ?>kelurahan">Kelurahan</a></li>
                <li><a href="<?php echo base_url(); ?>puskesmas">Puskesmas</a></li>
                <li><a href="<?php echo base_url(); ?>posyandu">Posyandu</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>balita"><i class="fa fa-fw fa-child"></i> Balita</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>jadwal"><i class="fa fa-fw fa-calendar-plus-o"></i> Jadwal</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>pengukuran"><i class="fa fa-fw fa-calculator"></i> Pengukuran</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>kader"><i class="fa fa-fw fa-users"></i> Kader</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-bars"></i> Laporan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>rekap_pb">Rekap Pengukuran Balita</a></li>
                <li><a href="<?php echo base_url(); ?>grafik_pb">Grafik Pengukuran Balita</a></li>
                <li><a href="<?php echo base_url(); ?>resume_kp">Resume Kegiatan Posyandu</a></li>
                <li><a href="<?php echo base_url(); ?>persediaan_bahan">Persediaan Bahan</a></li>
                <li><a href="<?php echo base_url(); ?>penyuluhan">Penyuluhan</a></li>

                <li><a href="<?php echo base_url(); ?>jb_ukur_bulan_ini">Jumlah Bayi Penimbangan Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_kms">Jumlah Bayi KMS Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_naik_bb">Jumlah Bayi Berat Badan Naik Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_tidak_naik_bb">Jumlah Bayi  Berat Badan Tidak Naik Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_abses_bulan_lalu">Jumlah Bayi Absen Timbang Bulan Lalu</a></li>
                <li><a href="<?php echo base_url(); ?>jb_pertama">Jumlah Bayi Pertama Hadir Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_ditimbang">Jumlah Bayi Ditimbang Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_absen_bulan_ini">Jumlah Bayi Absen Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_absen_vitamin">Jumlah Bayi Menerima Vitamin Bulan Ini</a></li>
                <li><a href="<?php echo base_url(); ?>jb_asi_eksklusif">Jumlah Bayi Asi Eksklusif</a></li>
                <li><a href="<?php echo base_url(); ?>jb_lulus_asi_eksklusif">Jumlah Bayi Lulus Asi Eksklusif</a></li>
                <li><a href="<?php echo base_url(); ?>jb_gakin">Jumlah Balita GAKIN</a></li>
                <li><a href="<?php echo base_url(); ?>jb_gizi">Jumlah GIZI</a></li>
                <li><a href="<?php echo base_url(); ?>jb_status_gizi">Jumlah Status GIZI</a></li>
                <li><a href="<?php echo base_url(); ?>jb_gizi_buruk">Jumlah GIZI Buruk</a></li>
                <li><a href="<?php echo base_url(); ?>jb_oralit">Jumlah Bayi Mendapatkan Oralit</a></li>
                <li><a href="<?php echo base_url(); ?>jb_kematian">Jumlah Kematian</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <?php if (!isset($name)) { ?>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <li class="dropdown <?php if(($this->uri->segment(1)=="register") || ($this->uri->segment(1)=="login")){echo "active";}?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> User <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>register">Register</a></li>
                <li><a href="<?php echo base_url(); ?>login">Login</a></li>
              </ul>
            </li>
            <?php if($this->session->userdata('is_admin_logged_in')) : ?>
            <li>
              <a href="<?php echo base_url(); ?>admins">Admin Page</a>
            </li>
          <?php endif; ?>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
        <?php } else { ?>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu <?php if($this->uri->segment(1)=="users"){echo "active";}?>">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <i class="fa fa-user"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Hi, <?php echo $name; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <p>
                    <?php echo $name; ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url(); ?>users/profil" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>users/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
        <?php } ?>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>