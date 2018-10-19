<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>TEST</b>
      </div>
      <strong>Copyright &copy; <?php echo date('Y'); ?></strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Chart -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/chart.js/Chart.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/jszip.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/pdfmake.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/vfs_fonts.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>dist/js/demo.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>plugins/iCheck/icheck.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/morris.js/morris.min.js"></script>
<script src="<?php echo base_url("assets/"); ?>js/custom.js"></script>
<script>
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>
</body>
</html>