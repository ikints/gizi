<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Kecamatan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php foreach ($kecamatan as $rows) : ?>
      <div class="row">
        <div class="col-md-8">
          <?php $attributes = array('class' => 'form-horizontal'); ?>
          <?php echo form_open('post_edit_kecamatan', $attributes); ?>
          <input type="hidden" name="kec_id" value="<?php echo $rows->kec_id; ?>">
          <div class="box box-primary">
            <div class="box-body box-profile">

              <div class="box-body">
                <div class="form-group">
                  <label for="kecamatan" class="col-sm-2 control-label">Nama Kecamatan</label>

                  <div class="col-sm-10">
                    <input type="type" class="form-control" id="kecamatan" name="kec_nama" placeholder="Nama Kecamatan" value="<?php echo $rows->kec_nama ?>">
                  </div>
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