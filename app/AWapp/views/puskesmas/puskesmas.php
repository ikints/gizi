<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Puskesmas
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Kecamatan</th>
                  <th>Nama Puskemas</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($puskesmas as $rows) : ?>
                <tr>
                  <td><?php echo $rows->kec_nama ?></td>
                  <td><a href="puskesmas/<?php echo $rows->puskesmas_id;  ?>"><?php echo $rows->puskesmas_nama ?></a></td>
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