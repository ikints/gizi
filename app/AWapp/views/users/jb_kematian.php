<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kematian
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Data Kematian</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Jumlah Kematian</a></li>
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
                              <th>Kelahiran</th>
                              <th>Kematian</th>
                              <th>Usia</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php $i=0; foreach ($jb_kematian_data as $rows) : $i++; ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rows->balita_nama; ?></td>
                                <td><?php echo date('d F Y', strtotime($rows->balita_tgl_lahir)); ?></td>
                                <td><?php echo date('d F Y', strtotime($rows->kematian_tgl)); ?></td>
                                <td><?php echo $rows->kematian_usia; ?></td>
                              </tr>
                              <?php endforeach; ?>
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
                          <th>0-6</th>
                          <th>6-12</th>
                          <th>12-24</th>
                          <th>24-36</th>
                          <th>36-48</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach ($jb_kematian as $rows) : $i++; ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $rows->posyandu_nama; ?></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>  
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div>
            </div>
            <div class="box-body">
              <div class="box box-primary">
                        <div class="box-body box-profile">
                          <div class="box-body chart-responsive">
                              <div class="chart" id="grafikkematian" style="height: 300px;"></div>
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
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kematian</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_kematian', $attributes); ?>
              <div class="modal-body">
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Balita</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="balita_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Balita--</option>
                              <?php foreach ($balita as $rows) : ?>
                                <option value="<?php echo($rows->balita_id); ?>"><?php echo($rows->balita_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Kematian</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" name="kematian_tgl" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>

                        </div>
                      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
    

<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik
    /*var line = new Morris.Line({
      // ID of the element in which to draw the chart.
      parseTime: false,
      element: 'grafikkematian',
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
    });*/

    var bar = new Morris.Bar({
      element: 'grafikkematian',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90, c: 10, d: 30, e: 50},
        {y: '2007', a: 75, b: 90, c: 11, d: 30, e: 50},
        {y: '2008', a: 50, b: 40, c: 13, d: 10, e: 50},
        {y: '2009', a: 75, b: 65, c: 14, d: 20, e: 70},
        {y: '2010', a: 50, b: 40, c: 10, d: 40, e: 50},
        {y: '2011', a: 75, b: 65, c: 17, d: 30, e: 50},
        {y: '2012', a: 100, b: 90, c: 10, d: 30, e: 50}
      ],
      barColors: ['#00a65a', '#f56954', '#12a91c', '#4a2ad7', '#1745c0'],
      xkey: 'y',
      ykeys: ['a', 'b', 'c', 'd', 'e'],
      labels: ['0-6', '6-12', '12-24', '24-36', '36-48'],
      hideHover: 'auto'
    });

    
  });
</script>