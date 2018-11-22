<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Info Gizi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Balita P/L Perbulan Tahun 2018</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="pl-month-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Balita Laki-laki & Perempuan Tahun 2018</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="pl-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
    
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

  </div>
    <!-- /.content -->
</div>

<script>
  $(function () {
    "use strict";

    // Bar CHART
    /*var bar = new Morris.bar({
      element: 'pl-month-chart',
      resize: true,
      parseTime: false,
      data: [
        {b: 'Jan', L: 240, P: 220},
        {b: 'Feb', L: 300, P: 320},
        {b: 'Mar', L: 160, P: 180},
        {b: 'Apr', L: 400, P: 350},
        {b: 'Mei', L: 500, P: 380},
        {b: 'Jun', L: 430, P: 450},
        {b: 'Jul', L: 240, P: 270},
        {b: 'Agu', L: 450, P: 500},
        {b: 'Sep', L: 290, P: 330},
        {b: 'Okt', L: 430, P: 450},
        {b: 'Nov', L: 410, P: 452},
        {b: 'Des', L: 690, P: 750}
      ],
      xkey: 'b',
      ykeys: ['L', 'P'],
      labels: ['Laki-laki', 'Perempuan'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });*/

    var bar = new Morris.Bar({
      element: 'pl-month-chart',
      resize: true,
      parseTime: false,
      data: [
        {b: 'Jan', L: 240, P: 220},
        {b: 'Feb', L: 300, P: 320},
        {b: 'Mar', L: 160, P: 180},
        {b: 'Apr', L: 400, P: 350},
        {b: 'Mei', L: 500, P: 380},
        {b: 'Jun', L: 430, P: 450},
        {b: 'Jul', L: 240, P: 270},
        {b: 'Agu', L: 450, P: 500},
        {b: 'Sep', L: 290, P: 330},
        {b: 'Okt', L: 430, P: 450},
        {b: 'Nov', L: 410, P: 452},
        {b: 'Des', L: 690, P: 750}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'b',
      ykeys: ['L', 'P'],
      labels: ['Laki-laki', 'Perempuan'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'pl-chart',
      resize: true,
      parseTime: false,
      colors: ["#3c8dbc", "#f56954"],
      data: [
        {label: "Perempuan", value: 1220},
        {label: "Laki-laki", value: 1870}
      ],
      hideHover: 'auto'
    });
    
  });
</script>