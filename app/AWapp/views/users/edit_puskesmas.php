<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Puskesmas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($puskesmas as $rows) : ?>
      <div class="row">
        <div class="col-md-8">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_puskesmas', $attributes); ?>
          <input type="hidden" name="puskesmas_id" value="<?php echo $rows->puskesmas_id; ?>">
          <div class="box box-primary">
            <div class="box-body box-profile">

              <div class="form-group">
                  <label for="kelurahan" class="col-sm-2 control-label">Kecamatan</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="kec_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Kecamatan--</option>
                              <?php foreach ($kecamatan as $row) : ?>
                                <option value="<?php echo($row->kec_id); ?>" <?php if($row->kec_id == $rows->kec_id ): echo "selected"; endif; ?>><?php echo($row->kec_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
              </div>
              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Puskesmas</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="kelurahan" placeholder="Nama Puskesmas" name="puskesmas_nama" data-validation="required" data-validation-error-msg="Harus diisi" value="<?php echo $rows->puskesmas_nama ?>">
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