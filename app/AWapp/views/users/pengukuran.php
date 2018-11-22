<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pengukuran
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
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              
              <table id="info" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Balita</th>
                  <th>Jadwal Periksa</th>
                  <th>Usia</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($pengukuran as $rows) : ?>
                <tr>
                  <td>
                    <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('delete-pengukuran', $attributes); ?>
                              <input type="hidden" name="ukur_id" value="<?php echo $rows->ukur_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-remove"></i> Hapus</button>
                          </form>
                  </td>
                  <td><a href="pengukuran/<?php echo $rows->ukur_id;  ?>"><?php echo $rows->balita_nama ?></a></td>
                  <td><?php echo $rows->jadwal_tgl ?></td>
                  <td><?php echo $rows->ukur_usia ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nama Balita</th>
                  <th>Jadwal Periksa</th>
                  <th>Usia</th>
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
                <h4 class="modal-title">Tambah Pengukuran</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_pengukuran', $attributes); ?>
                <div class="modal-body">
                  
                  <div class="box box-info bg-aqua">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Jadwal</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="jadwal_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Jadwal--</option>
                              <?php foreach ($jadwal as $rows) : ?>
                                <option value="<?php echo($rows->jadwal_id); ?>"><?php echo(date('d F Y', strtotime($rows->jadwal_tgl))); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Balita</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="balita_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Balita--</option>
                              <?php foreach ($balita as $rows) : ?>
                                <option value="<?php echo($rows->balita_id); ?>"><?php echo($rows->balita_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <!-- <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Usia</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_usia" placeholder="Usia" name="ukur_usia" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div> -->
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_bb" placeholder="Berat Badan" name="ukur_bb" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_tb" placeholder="Tinggi Badan" name="ukur_tb" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Cara Ukur Tinggi Badan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_cara_ukur_tb" placeholder="Cara Ukur Tinggi Badan" name="ukur_cara_ukur_tb" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Vitamin</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_vitamin" placeholder="Vitamin" name="ukur_vitamin" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">PMT STS</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_pmt_sts" placeholder="PMT STS" name="ukur_pmt_sts" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">PMT Uraian</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_pmt_uraian" placeholder="PMT Uraian" name="ukur_pmt_uraian" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Catatan</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_catatan" placeholder="Catatan" name="ukur_catatan" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Status Gizi</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="ukur_status_gizi" placeholder="Status Gizi" name="ukur_status_gizi" data-validation="required" data-validation-error-msg="Harus diisi">
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

