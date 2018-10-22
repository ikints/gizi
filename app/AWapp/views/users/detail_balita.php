<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Balita
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($balita as $rows) : ?>
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url("assets/"); ?>images/avatar.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $rows->balita_nama ?></h3>

              <p class="text-muted text-center"><?php echo $rows->balita_jk ?></p>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-9">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Posyandu</b> <a class="pull-right"><?php echo $rows->posyandu_nama ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nama Balita</b> <a class="pull-right"><?php echo $rows->balita_nama ?></a>
                </li>
                <li class="list-group-item">
                  <b>NIK</b> <a class="pull-right"><?php echo $rows->balita_nik ?></a>
                </li>
                <li class="list-group-item">
                  <b>Anak ke</b> <a class="pull-right"><?php echo $rows->balita_anak_ke ?> dari <?php echo $rows->balita_anak_dari ?></a>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <a class="pull-right"><?php echo $rows->balita_jk ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <a class="pull-right"><?php echo $rows->balita_tgl_lahir ?></a>
                </li>
                <li class="list-group-item">
                  <b>Berat</b> <a class="pull-right"><?php echo $rows->balita_berat_lahir ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nama Orang Tua</b> <a class="pull-right">1<?php echo $rows->balita_ortu_nama ?></a>
                </li>
                <li class="list-group-item">
                  <b>No Telepon/Hp Orang Tua</b> <a class="pull-right"><?php echo $rows->balita_tlpn ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right"><?php echo $rows->balita_alamat ?></a>
                </li>
                <li class="list-group-item">
                  <b>RT/RW</b> <a class="pull-right"><?php echo $rows->balita_rt ?>/<?php echo $rows->balita_rw ?></a>
                </li>
              </ul>

              <a href="<?php echo base_url(); ?>balita/edit/<?php echo $rows->balita_id;  ?>" class="btn btn-primary btn-block"><b>Edit</b></a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <?php endforeach; ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->