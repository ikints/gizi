<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Persediaan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Data Persediaan</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Jumlah Persediaan</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">

                    <div class="box">
                      <div class="box-header">
                        <div class="row">
                          <div class="col-md-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Tambah</button>
                          </div>
                        </div>
                      </div>
                      <div class="box-body">
                          <table id="info" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Nama Barang</th>
                              <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Obat Diare Batita</td>
                                <td>Obat untuk kebutuhan diare bayi dibawah tiga tahun</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Oralit Balita</td>
                                <td>Oralit untuk balita</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Vitamin A</td>
                                <td>Vitamin A untuk kebutuhan vitamin A</td>
                              </tr>
                            </tbody>  
                          </table>
                      </div>
                    </div>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="table-responsive">
                      <table id="info" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Posyandu</th>
                          <th>Obat Diare Batita</th>
                          <th>Oralit Balita</th>
                          <th>Vitamin A</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach ($persediaan as $rows) : $i++; ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $rows->posyandu_nama; ?></td>
                              <td>10</td>
                              <td>20</td>
                              <td>35</td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>  
                      </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>

              <div class="box-body">
                  <div class="box box-primary">
                        <div class="box-body box-profile">
                          <div class="box-body chart-responsive">
                              <div class="chart" id="grafikkms" style="height: 300px;"></div>
                            </div>
                        </div>
                        <div class="chart-legend text-center">
                          <span><br>
                            <span style="background-color: #00a65a; width: 20px; display: inline-block; margin: 5px;">&nbsp;</span>Usia (0-6) Bulan
                          </span>
                          <span><br>
                            <span style="background-color: #f56954; width: 20px; display: inline-block; margin: 5px;">&nbsp;</span>Usia (6-12) Bulan
                          </span>
                          <span><br>
                            <span style="background-color: #12a91c; width: 20px; display: inline-block; margin: 5px;">&nbsp;</span>Usia (12-24) Bulan
                          </span>
                          <span><br>
                            <span style="background-color: #4a2ad7; width: 20px; display: inline-block; margin: 5px;">&nbsp;</span>Usia (24-36) Bulan
                          </span>
                          <span><br>
                            <span style="background-color: #1745c0; width: 20px; display: inline-block; margin: 5px;">&nbsp;</span>Usia (36-48) Bulan
                          </span>
                        </div>
                  </div> 
            </div>

    </section>
  </div>
</div>

<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik

    var barChart = new Morris.Bar({
      element: 'grafikkms',
      resize: true,
      parseTime: false,
      data: [{"posyandu_nama":"Posyandu RW I","odb":"2","ob":"3","v":"4"},
            {"posyandu_nama":"Posyandu RW III","odb":"2","ob":"3","v":"4"},
            {"posyandu_nama":"Biru","odb":"2","ob":"3","v":"4"},
            {"posyandu_nama":"Merah","odb":"2","ob":"3","v":"4"}],
      barColors: ['#00a65a', '#f56954', '#12a91c'],
      xkey: 'posyandu_nama',
      ykeys: ['odb', 'ob','v'],
      labels: ['Obat Diare Batita', 'Oralit Balita','Vitamin A'],
      hideHover: 'auto',
      xLabelAngle: 60,
      redraw: true
    });

    
  });
</script>