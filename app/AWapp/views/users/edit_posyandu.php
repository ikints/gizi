<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Posyandu
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($posyandu as $rows) : ?>
      <div class="row">
        <div class="col-md-8">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_posyandu', $attributes); ?>
          <input type="hidden" name="posyandu_id" value="<?php echo $rows->posyandu_id; ?>">
          <div class="box box-primary">
            <div class="box-body box-profile">

              <div class="form-group">
                  <label for="kelurahan" class="col-sm-2 control-label">Kelurahan</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="kel_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Kelurahan--</option>
                              <?php foreach ($kelurahan as $row) : ?>
                                <option value="<?php echo($row->kel_id); ?>" <?php if($row->kel_id == $rows->kel_id ): echo "selected"; endif; ?>><?php echo($row->kel_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
              </div>
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Puskesmas</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="puskesmas_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Puskesmas--</option>
                              <?php foreach ($puskesmas as $row) : ?>
                                <option value="<?php echo($row->puskesmas_id); ?>" <?php if($row->puskesmas_id == $rows->kel_id ): echo "selected"; endif; ?>><?php echo($row->puskesmas_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Posyandu</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="posyandu" placeholder="Nama Posyandu" name="posyandu_nama" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->posyandu_nama; ?>">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="Alamat" name="posyandu_alamat" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->posyandu_alamat; ?>">
                          </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">RT</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="RT" name="posyandu_rt" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->posyandu_rt; ?>">
                          </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">RW</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="RW" name="posyandu_rw" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->posyandu_rw; ?>">
                          </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box-body -->
          </div>
          </form>
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