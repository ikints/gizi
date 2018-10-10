<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kecamatan
      </h1>
      <ol class="breadcrumb">
        
      </ol>
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
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-remove"></i> Hapus</button>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="info" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Kecamatan</th>
                  <th>Kode Kelurahan</th>
                  <th>Nama Kelurahan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Buahbatu</td>
                  <td>329001009</td>
                  <td>Margasari</td>
                </tr>
                <tr>
                  <td>Buahbatu</td>
                  <td>329002010</td>
                  <td>Rancasari</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
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
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->