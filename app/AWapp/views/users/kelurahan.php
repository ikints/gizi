<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Kelurahan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <div class="row">
                <div class="col-md-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Tambah</button>
                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-remove"></i> Hapus</button> -->
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="info" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th></th>
                  <th>Nama Kecamatan</th>
                  <th>Kode Kelurahan</th>
                  <th>Nama Kelurahan</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($kelurahan as $rows) : ?>
                <tr>
                  <tr>
                      <td>
                        <?php if($rows->jumlah_kelurahan < '1') : ?>
                        <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('delete-kelurahan', $attributes); ?>
                              <input type="hidden" name="kel_id" value="<?php echo $rows->kel_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-remove"></i> Hapus</button>
                          </form>
                        <?php endif; ?>
                      </td>
                  <td><?php echo $rows->kec_nama ?></td>
                  <td><a href="kelurahan/<?php echo $rows->kel_id;  ?>"><?php echo $rows->kel_kode ?></a></td>
                  <td><?php echo $rows->kel_nama ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th>Nama Kecamatan</th>
                  <th>Kode Kelurahan</th>
                  <th>Nama Kelurahan</th>
                </tr>
                </tfoot>
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


  <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kelurahan</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_kelurahan', $attributes); ?>
                <div class="modal-body">
                  
                  <div class="box box-info bg-aqua">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="kec_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Kecamatan--</option>
                              <?php foreach ($kecamatan as $rows) : ?>
                                <option value="<?php echo($rows->kec_id); ?>"><?php echo($rows->kec_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Kode Kelurahan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="Kode Kelurahan" name="kel_kode" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Kelurahan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="Nama Kelurahan" name="kel_nama" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                      </div>
  
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline">Save</button>
                </div>
              </form>


            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



        
