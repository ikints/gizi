<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Jumlah Balita Berat Badan Tidak Naik
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Data Balita Berat Badan Tidak Naik</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Jumlah Balita Berat Badan Tidak Naik</a></li>
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
                                <td></td>
                                <td></td>
                                <td></td>
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
                          <th>0-6</th>
                          <th>6-12</th>
                          <th>12-24</th>
                          <th>24-36</th>
                          <th>36-48</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach ($jb_tidak_naik_bb as $rows) : $i++; ?>
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
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>

    </section>
  </div>
</div>
  <!-- /.content-wrapper -->

        