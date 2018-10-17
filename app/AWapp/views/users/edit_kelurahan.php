<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Kelurahan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($kelurahan as $rows) : ?>
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_kelurahan', $attributes); ?>
          <input type="hidden" name="kel_id" value="<?php echo $rows->kel_id; ?>">
              <div class="box-body">
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
                  <label for="kelurahan" class="col-sm-2 control-label">Kode Kelurahan</label>

                  <div class="col-sm-10">
                    <input type="type" class="form-control" id="kelurahan" name="kel_kode" placeholder="Nama Kelurahan" value="<?php echo $rows->kel_kode ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kelurahan" class="col-sm-2 control-label">Nama Kelurahan</label>

                  <div class="col-sm-10">
                    <input type="type" class="form-control" id="kelurahan" name="kel_nama" placeholder="Nama Kelurahan" value="<?php echo $rows->kel_nama ?>">
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