<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penerima PMT Pemulihan
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
                  <th>NIK</th>
                  <th>Nama Balita</th>
                  <th>Jenis Kelamin</th>
                  <th>Mulai PMT</th>
                  <th>Jml PMT Diterima</th>
                </tr>
                </thead>
                <tbody>
                 <!--<?php //foreach ($balita_list as $rows) : ?>
                 <tr>
                  <td>
                    <?php //$attributes = array('class' => 'form-horizontal'); ?>
                            <?php //echo form_open('delete-pengukuran', $attributes); ?>
                              <input type="hidden" name="ukur_id" value="<?php //echo $rows->ukur_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-remove"></i> Hapus</button>
                          </form> 
                  </td>
                  <td><?php //echo $rows->balita_nik ?></td>
                  <td><a href="pemulihan/<?php //echo $rows->balita_id;  ?>"><?php //echo $rows->balita_nama ?></a></td>
                  <td><?php //echo $rows->jk ?></td>
                  <td><?php //echo $rows->mulai_pmt ?></td>
                  <td><?php //echo $rows->jml_pmt ?></td>
                </tr>
                <?php //endforeach; ?> -->

                <tr>
                  <td>#</td>
                  <td>1234567890987654321</td>
                  <td><a href="pemulihan/1">Nama Balita 1</td>
                  <td>Laki-laki</td>
                  <td>01-11-2018</td>
                  <td>17 Hari</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>1234567890987654321</td>
                  <td><a href="pemulihan/2">Nama Balita 2</td>
                  <td>Perempuan</td>
                  <td>03-11-2018</td>
                  <td>15 Hari</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>1234567890987654321</td>
                  <td><a href="pemulihan/3">Nama Balita 3</td>
                  <td>Laki-laki</td>
                  <td>05-11-2018</td>
                  <td>13 Hari</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>1234567890987654321</td>
                  <td><a href="pemulihan/4">Nama Balita 4</td>
                  <td>Perempuan</td>
                  <td>05-11-2018</td>
                  <td>13 Hari</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>1234567890987654321</td>
                  <td><a href="pemulihan/5">Nama Balita 5</td>
                  <td>Laki-laki</td>
                  <td>10-11-2018</td>
                  <td>7 Hari</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>NIK</th>
                  <th>Nama Balita</th>
                  <th>Jenis Kelamin</th>
                  <th>Mulai PMT</th>
                  <th>Jml PMT Diterima</th>
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
                <h4 class="modal-title">Tambah Penerima PMT</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_pengukuran', $attributes); ?>
                <div class="modal-body">
                  
                  <div class="box box-info bg-aqua">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Posyandu</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="posyandu_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Posyandu--</option>
                              <?php foreach ($posyandu as $rows) : ?>
                                <option value="<?php echo($rows->posyandu_id); ?>"><?php echo($rows->posyandu_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Balita</label>

                          <div class="col-sm-10">
                            <select class="form-control" name="balita_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Balita--</option>
                              <?php foreach ($balita_list as $rows) : ?>
                                <option value="<?php echo($rows->balita_id); ?>"><?php echo($rows->balita_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Mulai PMT</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" name="pmt_tgl_awal" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>

                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Akhir PMT</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" name="pmt_tgl_akhir" data-validation="required" data-validation-error-msg="Harus diisi" disabled>
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

