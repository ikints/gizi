<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        Laporan Rekapitulasi Pengukuran Balita
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('lihat_rekap_pb', $attributes); ?>
                <!-- Hide URL -->
                <input type="hidden" id="url" value="<?php echo base_url();?>">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="kec_id" data-validation="required" data-validation-error-msg="Harus diisi" id="kecamatan">
                        <option value="">--Pilih Kecamatan--</option>
                        <?php foreach ($kecamatan as $rows) : ?>
                        <option value="<?php echo($rows->kec_id); ?>"><?php echo($rows->kec_nama); ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kelurahan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="kel_id" data-validation="required" data-validation-error-msg="Harus diisi" id="kelurahan">
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Posyandu</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="posyandu_id" data-validation="required" data-validation-error-msg="Harus diisi" id="posyandu">
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Bulan/Tahun</label>

                    <div class="col-sm-3">
                      <select class="form-control" name="bulan" data-validation="required" data-validation-error-msg="Harus diisi" id="bulan">
                        <option value="">--Bulan--</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select class="form-control" name="tahun" data-validation="required" data-validation-error-msg="Harus diisi" id="tahun">
                        <option value="">--Tahun--</option>
                        <?php for ($i=2018; $i<=2035; $i++) : ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button id="lihat_rekap_pb" class="btn btn-info pull-right">Lihat</button>
                </div>
                <!-- /.box-footer -->
              </form>
                

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <div class="row">
                <div class="col-md-12" align="center">
                  LAPORAN REKAPITULASI PENGUKURAN BALITA <br>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="info_pb" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Balita</th>
                        <th>Nama Ibu</th>
                        <th>Alamat</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $i=0; foreach ($rekap_pb as $rows) : $i++;?>
                      <tr>
                        <td>
                          <?php echo $i; ?>
                        </td>
                        <td><?php echo $rows->balita_nama ?></td>
                        <td><?php echo $rows->balita_ortu_nama ?></td>
                        <td><?php echo $rows->balita_alamat ?></td>
                        <td><?php echo $rows->ukur_bb ?></td>
                        <td><?php echo $rows->ukur_tb ?></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->