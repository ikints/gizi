<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Posyandu
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
                  <th>Nama Kelurahan</th>
                  <th>Nama Posyandu</th>
                  <th>Alamat</th>
                  <th>Puskesmas Pembimbing</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posyandu as $rows) : ?>
                <tr>
                  <tr>
                      <td>
                        <?php if($rows->jumlah_posyandu < '1') : ?>
                        <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('delete-posyandu', $attributes); ?>
                              <input type="hidden" name="posyandu_id" value="<?php echo $rows->posyandu_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-remove"></i> Hapus</button>
                          </form>
                        <?php endif; ?>
                      </td>
                  <td><?php echo $rows->kel_nama ?></td>
                  <td><a href="posyandu/<?php echo $rows->posyandu_id;  ?>"><?php echo $rows->posyandu_nama ?></a></td>
                  <td><?php echo $rows->posyandu_alamat ?> <?php echo $rows->posyandu_rt ?>/<?php echo $rows->posyandu_rw ?></td>
                  <td><?php echo $rows->puskesmas_nama ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th>Nama Kelurahan</th>
                  <th>Nama Posyandu</th>
                  <th>Alamat</th>
                  <th>Puskesmas Pembimbing</th>
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
                <h4 class="modal-title">Tambah Posyandu</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_posyandu', $attributes); ?>
                <div class="modal-body">
                  
                  <div class="box box-info bg-aqua">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Kelurahan</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="kel_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Kelurahan--</option>
                              <?php foreach ($kelurahan as $rows) : ?>
                                <option value="<?php echo($rows->kel_id); ?>"><?php echo($rows->kel_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Puskesmas</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="puskesmas_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Puskesmas--</option>
                              <?php foreach ($puskesmas as $rows) : ?>
                                <option value="<?php echo($rows->puskesmas_id); ?>"><?php echo($rows->puskesmas_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Nama Posyandu</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="Nama Posyandu" name="posyandu_nama" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="Alamat" name="posyandu_alamat" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">RT</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="RT" name="posyandu_rt" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">RW</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" placeholder="RW" name="posyandu_rw" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Username</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" data-validation="required" data-validation-error-msg="Harus diisi">
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