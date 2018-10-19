<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Balita
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($balita as $rows) : ?>

      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_balita', $attributes); ?>
          <input type="hidden" name="balita_id" value="<?php echo $rows->balita_id; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="kelurahan" class="col-sm-2 control-label">Posyandu</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="posyandu_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Posyandu--</option>
                              <?php foreach ($posyandu as $row) : ?>
                                <option value="<?php echo($row->posyandu_id); ?>" <?php if($row->posyandu_id == $rows->posyandu_id ): echo "selected"; endif; ?>><?php echo($row->posyandu_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                </div>
                <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Nama Balita</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Nama Balita" name="balita_nama" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_nama ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="NIK" name="balita_nik" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_nik ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Anak ke</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" name="balita_anak_ke" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_anak_ke ?>">
                          </div>
                          <label for="inputPassword3" class="col-sm-2 control-label">dari</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" name="balita_anak_dari" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_anak_dari ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="radio">
                              <label>
                                <input type="radio" name="balita_jk" id="optionsRadios1" value="L" <?php if($rows->balita_jk == 'L' ): echo 'checked="checked"'; endif; ?>>
                                Laki-laki
                              </label>
                              <label>
                                <input type="radio" name="balita_jk" id="optionsRadios1" value="P" <?php if($rows->balita_jk == 'P' ): echo 'checked="checked"'; endif; ?>>
                                Perempuan
                              </label>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="datepicker" placeholder="Nama Kecamatan" name="balita_tgl_lahir" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo date('d-m-Y', strtotime($rows->balita_tgl_lahir)); ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Nama Orang Tua</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Nama Orang Tua" name="balita_ortu_nama" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_ortu_nama ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">No Telepon/Hp Orang Tua</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="No Telepon/Hp Orang Tua" name="balita_tlpn" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_tlpn ?>">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                          <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat" name="balita_alamat" data-validation="required" data-validation-error-msg="Harus diisi"><?php echo $rows->balita_alamat ?></textarea>
                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">RT/RW</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" placeholder="RT" name="balita_rt" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_rt ?>">
                          </div>
                          <label for="inputPassword3" class="col-sm-2 control-label">/</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" placeholder="RW" name="balita_rw" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->balita_rw ?>">
                          </div>
                        </div>

                        <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Kelurahan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kel_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Kelurahan--</option>
                              <?php foreach ($kelurahan as $row) : ?>
                                <option value="<?php echo($row->kel_id); ?>" <?php if($row->kel_id == $rows->kel_id ): echo "selected"; endif; ?>><?php echo($row->kel_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
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