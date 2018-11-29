<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jumlah GIZI Balita
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Data GIZI Balita</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Jumlah GIZI Balita</a></li>
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
                              <th>Nama Balita</th>
                              <th>Usia</th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Irwan Nasution</td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Budiman Ahmad</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Wati Maulidiah</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Irwan Nasution</td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Budiman Ahmad</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Wati Maulidiah</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>Irwan Nasution</td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td>Budiman Ahmad</td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td>Wati Maulidiah</td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>Wati Maulidiah</td>
                                <td>4</td>
                              </tr>
                            </tbody>  
                          </table>
                      </div>
                    </div>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th rowspan="2">#</th>
                          <th rowspan="2">Nama Posyandu</th>
                          <th colspan="5" class="text-center bg-green">Gizi Baik/Normal</th>
                          <th colspan="5" class="text-center bg-yellow">Gizi Buruk</th>
                          <th colspan="5" class="text-center bg-red">Gizi Buruk (Lama)</th>
                          <th colspan="5" class="text-center bg-red">Gizi Buruk (Baru)</th>
                        </tr>
                        <tr>
                          <th>0-6</th>
                          <th>6-12</th>
                          <th>12-24</th>
                          <th>24-36</th>
                          <th>36-48</th>
                          <th>0-6</th>
                          <th>6-12</th>
                          <th>12-24</th>
                          <th>24-36</th>
                          <th>36-48</th>
                          <th>0-6</th>
                          <th>6-12</th>
                          <th>12-24</th>
                          <th>24-36</th>
                          <th>36-48</th>
                          <th>0-6</th>
                          <th>6-12</th>
                          <th>12-24</th>
                          <th>24-36</th>
                          <th>36-48</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach ($jb_gizi as $rows) : $i++; ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $rows->posyandu_nama; ?></td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                              <td>9</td>
                              <td>10</td>
                              <td>11</td>
                              <td>12</td>
                              <td>13</td>
                              <td>14</td>
                              <td>15</td>
                              <td>16</td>
                              <td>17</td>
                              <td>18</td>
                              <td>19</td>
                              <td>20</td>
                              <td>21</td>
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
                        <h3 class="box-title text-center">Grafik Balita Gizi Baik</h3>
                        <div class="box-body box-profile">
                          <div class="box-body chart-responsive">
                              <div class="chart" id="grafikbalitabaik" style="height: 300px;"></div>
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

            <div class="box-body">
                  <div class="box box-primary">
                        <h3 class="box-title text-center">Grafik Balita Gizi Buruk</h3>
                        <div class="box-body box-profile">
                          <div class="box-body chart-responsive">
                              <div class="chart" id="grafikbalitabruruk" style="height: 300px;"></div>
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

            <div class="box-body">
                  <div class="box box-primary">
                        <h3 class="box-title text-center">Grafik Balita Gizi Buruk Lama</h3>
                        <div class="box-body box-profile">
                          <div class="box-body chart-responsive">
                              <div class="chart" id="grafikbalitaburuklama" style="height: 300px;"></div>
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

            <div class="box-body">
                  <div class="box box-primary">
                        <h3 class="box-title text-center">Grafik Balita Gizi Buruk Baru</h3>
                        <div class="box-body box-profile">
                          <div class="box-body chart-responsive">
                              <div class="chart" id="grafikbalitaburukbaru" style="height: 300px;"></div>
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
  <!-- /.content-wrapper -->

<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik

    var barChart = new Morris.Bar({
      element: 'grafikbalitabaik',
      resize: true,
      parseTime: false,
      data: [{"posyandu_nama":"Posyandu RW I","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Posyandu RW III","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Biru","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Merah","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"}],
      barColors: ['#00a65a', '#f56954', '#12a91c', '#4a2ad7', '#1745c0'],
      xkey: 'posyandu_nama',
      ykeys: ['jumlah_06', 'jumlah_612','jumlah_1224', 'jumlah_2436', 'jumlah_3648'],
      labels: ['Usia 0-6', 'Usia 6-12','Usia 12-24', 'Usia 24-36', 'Usia 36-48'],
      hideHover: 'auto',
      xLabelAngle: 60,
      redraw: true
    });

    
  });
</script>


<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik

    var barChart = new Morris.Bar({
      element: 'grafikbalitabruruk',
      resize: true,
      parseTime: false,
      data: [{"posyandu_nama":"Posyandu RW I","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Posyandu RW III","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Biru","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Merah","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"}],
      barColors: ['#00a65a', '#f56954', '#12a91c', '#4a2ad7', '#1745c0'],
      xkey: 'posyandu_nama',
      ykeys: ['jumlah_06', 'jumlah_612','jumlah_1224', 'jumlah_2436', 'jumlah_3648'],
      labels: ['Usia 0-6', 'Usia 6-12','Usia 12-24', 'Usia 24-36', 'Usia 36-48'],
      hideHover: 'auto',
      xLabelAngle: 60,
      redraw: true
    });

    
  });
</script>

<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik

    var barChart = new Morris.Bar({
      element: 'grafikbalitaburuklama',
      resize: true,
      parseTime: false,
      data: [{"posyandu_nama":"Posyandu RW I","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Posyandu RW III","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Biru","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Merah","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"}],
      barColors: ['#00a65a', '#f56954', '#12a91c', '#4a2ad7', '#1745c0'],
      xkey: 'posyandu_nama',
      ykeys: ['jumlah_06', 'jumlah_612','jumlah_1224', 'jumlah_2436', 'jumlah_3648'],
      labels: ['Usia 0-6', 'Usia 6-12','Usia 12-24', 'Usia 24-36', 'Usia 36-48'],
      hideHover: 'auto',
      xLabelAngle: 60,
      redraw: true
    });

    
  });
</script>

<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik

    var barChart = new Morris.Bar({
      element: 'grafikbalitaburukbaru',
      resize: true,
      parseTime: false,
      data: [{"posyandu_nama":"Posyandu RW I","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Posyandu RW III","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Biru","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"},
            {"posyandu_nama":"Merah","jumlah_06":"2","jumlah_612":"3","jumlah_1224":"4","jumlah_2436":"1","jumlah_3648":"2"}],
      barColors: ['#00a65a', '#f56954', '#12a91c', '#4a2ad7', '#1745c0'],
      xkey: 'posyandu_nama',
      ykeys: ['jumlah_06', 'jumlah_612','jumlah_1224', 'jumlah_2436', 'jumlah_3648'],
      labels: ['Usia 0-6', 'Usia 6-12','Usia 12-24', 'Usia 24-36', 'Usia 36-48'],
      hideHover: 'auto',
      xLabelAngle: 60,
      redraw: true
    });

    
  });
</script>

        