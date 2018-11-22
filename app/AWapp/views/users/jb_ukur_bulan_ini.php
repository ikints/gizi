<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Balita Ditimbang bulan ini
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Data Ditimbang bulan ini</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Jumlah Balita Ditimbang bulan ini</a></li>
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
                              <?php $i=0; foreach ($jb_ukur_bulan_ini_data as $rows) : $i++; ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rows->balita_nama; ?></td>
                                <td><?php echo $rows->ukur_usia; ?></td>
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
                          <?php $i=0; foreach ($jb_ukur_bulan_ini as $rows) : $i++; ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $rows->posyandu_nama; ?></td>
                              <td><?php echo $rows->jumlah_ukur_06; ?></td>
                              <td><?php echo $rows->jumlah_ukur_612; ?></td>
                              <td><?php echo $rows->jumlah_ukur_1224; ?></td>
                              <td><?php echo $rows->jumlah_ukur_2436; ?></td>
                              <td><?php echo $rows->jumlah_ukur_3648; ?></td>
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
  </div>
</div>

<div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Timbang</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_timbang_bln_ini', $attributes); ?>
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
                          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Timbang</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" name="timbang_tgl" data-validation="required" data-validation-error-msg="Harus diisi">
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

<?php $data_k = ""; 
      foreach ($jb_ukur_bulan_ini as $rows) : ?>
<?php
      //Grafik Kematian    
      if ($data_k != "") {$data_k .= ",";}

          $data_k .= '{';
          $data_k .= '"posyandu_nama":"'  . $rows->posyandu_nama . '",';
          $data_k .= '"jumlah_ukur_06":"'  . $rows->jumlah_ukur_06 . '",';
          $data_k .= '"jumlah_ukur_612":"'  . $rows->jumlah_ukur_612 . '",';
          $data_k .= '"jumlah_ukur_1224":"'  . $rows->jumlah_ukur_1224 . '",';
          $data_k .= '"jumlah_ukur_2436":"'  . $rows->jumlah_ukur_2436 . '",';
          $data_k .= '"jumlah_ukur_3648":"'  . $rows->jumlah_ukur_3648 . '"';
          $data_k .= '}'; 
?>
<?php endforeach; ?>
      <?php $data_k ='['.$data_k.']'; ?>


<script>
  $(function () {
    
    //--------------------------------------------------Laporan Grafik

    var barChart = new Morris.Bar({
      element: 'grafikkematian',
      resize: true,
      parseTime: false,
      data: <?php echo $data_k; ?>,
      barColors: ['#00a65a', '#f56954', '#12a91c', '#4a2ad7', '#1745c0'],
      xkey: 'posyandu_nama',
      ykeys: ['jumlah_ukur_06', 'jumlah_ukur_612','jumlah_ukur_1224', 'jumlah_ukur_2436', 'jumlah_ukur_3648'],
      labels: ['Usia 0-6', 'Usia 6-12','Usia 12-24', 'Usia 24-36', 'Usia 36-48'],
      hideHover: 'auto',
      xLabelAngle: 60,
      redraw: true
    });

    
  });
</script>

        