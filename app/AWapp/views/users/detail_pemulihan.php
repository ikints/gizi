Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Status Penerima PMT
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($pemulihan as $rows) : ?>
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url("assets/"); ?>images/avatar.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $rows['nama_balita'] ?></h3>

              <p class="text-muted text-center"><?php echo $rows['jk'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Posyandu</b> <a class="pull-right"><?php echo $rows['posyandu'] ?></a>
                </li>
                <!-- <li class="list-group-item">
                  <b>Nama Balita</b> <a class="pull-right"><?php echo $rows['nama_balita'] ?></a>
                </li> -->
                <li class="list-group-item">
                  <b>Tanggal Mulai PMT</b> <a class="pull-right"><?php echo $rows['mulai_pmt'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Tanggal Selesai PTM</b> <a class="pull-right"><?php echo $rows['akhir_pmt'] ?></a>
                </li>
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-9">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php if($rows['balita_id']=='1'):?>
              <table id="info" class="table table-bordered table-hover">
                <tr>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                </tr>
                <tr>
                  <td style="text-align: center;">1 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">1 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">2 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">2 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">3 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">3 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">3 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">4 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">4 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">4 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">5 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">5 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">5 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">6 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">6 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">6 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">7 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">7 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">7 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">8 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">8 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">8 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">9 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">9 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">9 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">10 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">10 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">10 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">11 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">11 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">11 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">12 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">12 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">12 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">13 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">13 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">13 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">14 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">14 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">14 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">15 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">15 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">15 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">16 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">16 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">16 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">17 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">17 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">18 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">19 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">20 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">21 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">22 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">23 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">24 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">25 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">26 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">27 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">28 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">29 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">30 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">&nbsp;</td>

                </tr>
                <tr>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">31 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">&nbsp;</td>
                </tr>
              </table>
            <?php endif;?>


            <?php if($rows['balita_id']=='2'):?>
              <table id="info" class="table table-bordered table-hover">
                <tr>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                </tr>
                <tr>
                  <td style="text-align: center;">3 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">1 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">4 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">2 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">5 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">3 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">3 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">6 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">4 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">4 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">7 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">5 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">5 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">8 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">6 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">6 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">9 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">7 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">7 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">10 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">8 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">8 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">11 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">9 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">9 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">12 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">10 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">10 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">13 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">11 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">11 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">14 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">12 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">12 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">15 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">13 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">13 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">16 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">14 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">14 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">17 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">15 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">15 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">18 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">16 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">16 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">19 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">20 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">21 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">22 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">23 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">24 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">25 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">26 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">27 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">28 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">29 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">30 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">29 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">30 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">&nbsp;</td>
                  <td style="text-align: center;">31 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
              </table>
            <?php endif;?>


            <?php if($rows['balita_id']=='3'):?>
              <table id="info" class="table table-bordered table-hover">
                <tr>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                </tr>
                <tr>
                  <td style="text-align: center;">5 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">5 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">4 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">6 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">6 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">5 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">7 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">7 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">6 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">8 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">8 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">7 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">9 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">9 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">8 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">10 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">10 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">9 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">11 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">11 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">10 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">12 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">12 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">11 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">13 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">13 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">12 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">14 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">14 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">13 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">15 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">15 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">14 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">16 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">16 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">15 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">17 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">17 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">16 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">18 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">19 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">20 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">21 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">22 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">23 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">24 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">25 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">26 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">27 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">28 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">29 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">30 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">1 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">2 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">3 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">4 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">3 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <!-- <tr>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr> -->
              </table>
            <?php endif;?>

            <?php if($rows['balita_id']=='4'):?>
              <table id="info" class="table table-bordered table-hover">
                <tr>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                </tr>
                <tr>
                  <td style="text-align: center;">5 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">5 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">4 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">6 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">6 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">5 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">7 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">7 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">6 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">8 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">8 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">7 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">9 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">9 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">8 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">10 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">10 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">9 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">11 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">11 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">10 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">12 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">12 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">11 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">13 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">13 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">12 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">14 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">14 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">13 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">15 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">15 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">14 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">16 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">16 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">15 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">17 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">17 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">16 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">18 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">19 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">20 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">21 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">22 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">23 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">24 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">25 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">26 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">27 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">28 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">29 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">30 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">1 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">2 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">3 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">4 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">3 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <!-- <tr>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr> -->
              </table>
            <?php endif;?>


            <?php if($rows['balita_id']=='5'):?>
              <table id="info" class="table table-bordered table-hover">
                <tr>
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                  <!-- <th>&nbsp;</th> -->
                  <th style="text-align: center;">Tanggal</th>
                  <th style="text-align: center;">Diterima</th>
                </tr>
                <tr>
                  <td style="text-align: center;">10 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">10 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">9 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">11 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">11 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">10 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                  <td style="text-align: center;">12 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">12 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">11 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">13 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">13 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">12 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">14 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">14 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">13 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">15 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">15 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">14 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">16 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox" checked="true"></td>
                  <td style="text-align: center;">16 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">15 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">17 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">16 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">18 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">17 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">19 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">18 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">20 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">20 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">19 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">21 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">10 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">22 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">21 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">23 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">22 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">24 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">23 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">25 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">24 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">26 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">25 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">27 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">26 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">28 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">27 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">29 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">28 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">30 November 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">29 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">1 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">30 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">2 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">31 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">3 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">1 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">4 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">3 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">2 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">5 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">4 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">3 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">6 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">5 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">4 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">7 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">6 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">5 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">8 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">7 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">6 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <tr>
                  <td style="text-align: center;">9 Desember 2018</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">8 Januari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;">7 Februari 2019</td>
                  <td style="text-align: center;"><input type="checkbox"></td>

                </tr>
                <!-- <tr>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                  <td style="text-align: center;"> </td>
                  <td style="text-align: center;"><input type="checkbox"></td>
                </tr> -->
              </table>
            <?php endif;?>
              
               <a href="<?php echo base_url(); ?>pemulihan"class="btn btn-primary btn-block"><b>Simpan</b></a>
              <a href="<?php echo base_url(); ?>pemulihan"class="btn btn-primary btn-block"><b>Batal</b></a>
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
  <!-- /.content-wrapper