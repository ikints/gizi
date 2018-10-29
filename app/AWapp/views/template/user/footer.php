<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>GIZI</b>
      </div>
      <strong>Copyright &copy; <?php echo date('Y'); ?></strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>

<div class="modal modal-primary fade" id="modal-success">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Success</h4>
                  </div>
                  <div class="modal-body">
                    <p><?php echo $this->session->flashdata('msg'); ?></p>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

<!-- ./wrapper -->
<script src="<?php echo base_url("assets/"); ?>js/custom.js"></script>
<?php if($this->session->flashdata('msg')) : ?>
<script>
  $(function () {
    $(window).on('load',function(){
          $('#modal-success').modal('show');
        });
  }); 
</script>
<?php endif; ?>

</body>
</html>