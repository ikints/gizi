<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kecamatan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-md-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Tambah</button>

                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="info" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th></th>
                  <th>Kode Kecamatan</th>
                  <th>Nama Kecamatan</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($kecamatan as $rows) : ?>
                    <tr>
                      <td>

                        <?php if($rows->jumlah_kel == '0') { ?>

                        <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('delete-kecamatan', $attributes); ?>
                              <input type="hidden" name="kec_id" value="<?php echo $rows->kec_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-remove"></i> Hapus</button>
                          </form>

                        <?php }else{ ?>
                              <button type="submit" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-remove"></i> Hapus</button>
                        <?php } ?>

                      </td>
                      <td><a href="kecamatan/<?php echo $rows->kec_id;  ?>"><?php echo $rows->kec_kode ?></a></td>
                      <td><?php echo $rows->kec_nama ?></td>
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



  <div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kecamatan</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_kecamatan', $attributes); ?>
              <div class="modal-body">
                
                <form class="form-horizontal">
                  
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Kode Kecamatan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Kode Kecamatan" name="kec_kode" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Nama Kecamatan" name="kec_nama" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                      
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>


<div class="modal modal-danger fade" id="modal-delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Kecamatan</h4>
              </div>
              <div class="modal-body">
                Tidak bisa dihapus
              </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>

        