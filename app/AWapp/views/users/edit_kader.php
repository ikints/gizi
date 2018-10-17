<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Kader
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($kader as $rows) : ?>
      
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_kader', $attributes); ?>
          <input type="hidden" name="kader_id" value="<?php echo $rows->kader_id; ?>">
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
                  <label for="kelurahan" class="col-sm-2 control-label">Nama Kader</label>

                  <div class="col-sm-10">
                    <input type="type" class="form-control" id="kelurahan" name="kader_nama" placeholder="Kegiatan" value="<?php echo $rows->kader_nama ?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo base_url(); ?>kader" class="btn btn-info" role="button">Cancel</a>
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