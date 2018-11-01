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

              <p class="text-muted text-center"><a href="<?php echo base_url(); ?>balita/<?php echo $rows->balita_id;  ?>">Detil Balita</a></p>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-9">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div class="box-body chart-responsive">
                  <div class="caption">Grafik Pengukuran Balita</div>
                  <div class="chart" id="grafikbalita" style="height: 300px;"></div>
                  <div class="caption-bottom">Usia Balita</div>
                </div>
            </div>

            <div id="legend"></div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <?php endforeach; ?>

        <?php $outp = ""; foreach ($grafik as $rows) : ?>

          <?php

          $usia = $rows->ukur_usia;
          $berat = $rows->ukur_bb; 

          if ($outp != "") {$outp .= ",";}

          $outp .= '{';
          $outp .= '"usia":"'  . $usia . '",';
          $outp .= '"berat":"'  . $berat . '"';
          $outp .= '}'; 

          ?>

        <?php endforeach; ?>

        <?php $outp ='['.$outp.']'; ?>
        <?php //echo $outp; ?>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->

  


  <script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik
    var line = new Morris.Line({
      // ID of the element in which to draw the chart.
      parseTime: false,
      element: 'grafikbalita',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: <?php echo $outp; ?>,
      // The name of the data record attribute that contains x-values.
      xkey: 'usia',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['berat'],
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Berat Badan (kg)']
    });

    
  });
</script>