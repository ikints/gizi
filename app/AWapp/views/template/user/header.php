<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GIZI - <?php echo $title; ?></title>
  <link rel="icon" href="<?php echo base_url("assets/"); ?>images/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>dist/css/skins/_all-skins.min.css">
  <!-- login -->
  <link rel="stylesheet" href="<?php echo base_url("assets/theme/"); ?>plugins/iCheck/square/blue.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/"); ?>css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

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
<!-- bootstrap time picker -->
<script src="<?php echo base_url("assets/theme/"); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url("assets/theme/"); ?>bower_components/morris.js/morris.min.js"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  