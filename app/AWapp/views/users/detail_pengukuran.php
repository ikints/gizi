<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Pengukuran
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($pengukuran as $rows) : ?>
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
                  <b>Jadwal</b> <a class="pull-right"><?php echo date('d F Y', strtotime($rows->jadwal_tgl)); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nama Balita</b> <a class="pull-right"><?php echo $rows->balita_nama ?></a>
                </li>
                <li class="list-group-item">
                  <b>Usia</b> <a class="pull-right"><?php echo $rows->balita_nama ?></a>
                </li>
                <li class="list-group-item">
                  <b>Berat Badan</b> <a class="pull-right"><?php echo $rows->balita_nama ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tinggi Badan</b> <a class="pull-right"><?php echo $rows->ukur_tb ?></a>
                </li>
                <li class="list-group-item">
                  <b>Cara Ukur Tinggi Badan</b> <a class="pull-right"><?php echo $rows->ukur_cara_ukur_tb ?></a>
                </li>
                <li class="list-group-item">
                  <b>Vitamin</b> <a class="pull-right"><?php echo $rows->ukur_vitamin ?></a>
                </li>
                <li class="list-group-item">
                  <b>PMT STS</b> <a class="pull-right"><?php echo $rows->ukur_pmt_sts ?></a>
                </li>
                <li class="list-group-item">
                  <b>PMT Uraian</b> <a class="pull-right"><?php echo $rows->ukur_pmt_uraian ?></a>
                </li>
                <li class="list-group-item">
                  <b>Catatan</b> <a class="pull-right"><?php echo $rows->ukur_catatan ?></a>
                </li>
                <li class="list-group-item">
                  <b>Status Gizi</b> <a class="pull-right"><?php echo $rows->ukur_status_gizi ?></a>
                </li>
              </ul>

              <a href="<?php echo base_url(); ?>pengukuran/edit/<?php echo $rows->ukur_id;  ?>"class="btn btn-primary btn-block"><b>Edit</b></a>
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