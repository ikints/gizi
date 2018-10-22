<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Pengukuran
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($pengukuran as $rows) : ?>
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_pengukuran', $attributes); ?>
          <input type="hidden" name="ukur_id" value="<?php echo $rows->ukur_id; ?>">
              <div class="box-body">
                <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Jadwal</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="jadwal_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Jadwal--</option>
                              <?php foreach ($jadwal as $row) : ?>
                                <option value="<?php echo($row->jadwal_id); ?>" <?php if($row->jadwal_id == $rows->jadwal_id ): echo "selected"; endif; ?>><?php echo(date('d F Y', strtotime($row->jadwal_tgl))); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>

                  <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Balita</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="balita_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Balita--</option>
                              <?php foreach ($balita as $row) : ?>
                                <option value="<?php echo($rows->balita_id); ?>" <?php if($row->balita_id == $rows->balita_id ): echo "selected"; endif; ?>><?php echo($row->balita_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                  <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Usia</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_usia" placeholder="Usia" name="ukur_usia" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_usia); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_bb" placeholder="Berat Badan" name="ukur_bb" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_bb); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_tb" placeholder="Tinggi Badan" name="ukur_tb" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_tb); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Cara Ukur Tinggi Badan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_cara_ukur_tb" placeholder="Cara Ukur Tinggi Badan" name="ukur_cara_ukur_tb" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_cara_ukur_tb); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Vitamin</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_vitamin" placeholder="Vitamin" name="ukur_vitamin" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_vitamin); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">PMT STS</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_pmt_sts" placeholder="PMT STS" name="ukur_pmt_sts" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_pmt_sts); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">PMT Uraian</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_pmt_uraian" placeholder="PMT Uraian" name="ukur_pmt_uraian" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_pmt_uraian); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Catatan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_catatan" placeholder="Catatan" name="ukur_catatan" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_catatan); ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Status Gizi</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_status_gizi" placeholder="Status Gizi" name="ukur_status_gizi" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo($rows->ukur_status_gizi); ?>">
                          </div>
                        </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>

              </form>
              <!-- /.box-footer -->
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