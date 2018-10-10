<div class="content-wrapper">
    <div class="container">

      <?php if(($this->session->flashdata('msg'))) : ?>

          <div class="row">
            <!-- /.col -->
            <div class="col-md-3 pull-right">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $this->session->flashdata('msg'); ?></h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                  <!-- /.box-tools -->
                </div>
              </div>
              <!-- /.box -->
            </div>

          </div>
            <!-- /.col -->
    <?php endif; ?>

      <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Login</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
      <?php if (isset($error)){ ?>
        <p class="login-box-msg text-red"><?php echo $error; ?></p>
      <?php } ?>
      <?php echo form_open('valid-login'); ?>
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Username" data-validation="required" data-validation-error-msg="Ini adalah kolom yang harus diisi">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password"  data-validation="required" data-validation-error-msg="Ini adalah kolom yang harus diisi">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="checkbox"> Ingatkan saya
        </div>
        <div class="row">
          <div class="col-xs-8">
            <a href="<?php echo base_url(); ?>lupa-password">Lupa Password</a><br>
            <a href="<?php echo base_url(); ?>register" class="text-center">Daftar Member Baru</a>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

     

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

    </div>
</div>
