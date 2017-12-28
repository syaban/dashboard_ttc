<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Morris.js Charts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b>TTC</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?= base_url('login/logout'); ?>" class="dropdown-toggle">
              <span class="hidden-xs">Logout</span>
            </a>
         
          </li>
        </ul>
      </div>
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url('welcome/user'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Input Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if($user_data->user_level == 'admin' || $user_data->user_level == 'bm') { ?>
            <li><a href="<?= base_url('welcome/form_power_plant'); ?>"><i class="fa fa-circle-o"></i>Power Plant</a></li>
            <?php } ?>
            <?php if($user_data->user_level == 'admin' || $user_data->user_level == 'ts') { ?>
            <li><a href="<?= base_url('welcome/form_cooling'); ?>"><i class="fa fa-circle-o"></i>Cooling</a></li>
            <li><a href="<?= base_url('welcome/form_rack_space'); ?>"><i class="fa fa-circle-o"></i>Rack Space</a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INPUT FORM
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cooling</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url('welcome/submit_cooling'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="pln" class="col-sm-2 control-label" style="text-align:center">Variable</label>

                  <div class="col-xs-3 control-label ">
                    <p style="text-align:center"><b> Value </b></p>
                  </div>
                  <div class="col-xs-3 control-label">
                    <p style="text-align:center"><b> Capacity </b></p>
                  </div>
                </div>
              
                <div class="form-group">
                  <label for="level3" class="col-sm-2 control-label">Level 3</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level3" name="level3">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level3" placeholder="/<?= $level3_capacity.' '.$level3_unit; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="level4" class="col-sm-2 control-label">Level 4</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level4"  name="level4">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="/<?= $level4_capacity.' '.$level4_unit; ?>" readonly>
                  </div>

                </div>
                <div class="form-group">
                  <label for="level6" class="col-sm-2 control-label">Level 6</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level6" name="level6">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="/<?= $level6_capacity.' '.$level6_unit; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="level7" class="col-sm-2 control-label">Level 7</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level7" placeholder="" name="level7">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="/<?= $level7_capacity.' '.$level7_unit; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="level8" class="col-sm-2 control-label">Level 8</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level8" name="level8">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="/<?= $level8_capacity.' '.$level8_unit; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="level9_bss" class="col-sm-2 control-label">Level 9 BSS</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level9_bss" name="level9_bss">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="/<?= $level9_bss_capacity.' '.$level9_bss_unit; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="level9_transmisi" class="col-sm-2 control-label">Level 9 Transmisi</label>

                  <div class="col-xs-3">
                    <input type="text" class="form-control" id="level9_transmisi" name="level9_transmisi">
                  </div>
                  <div class="col-xs-3">
                    <input type="text" class="form-control" placeholder="/<?= $level9_transmisi_capacity.' '.$level9_transmisi_unit; ?>" readonly>
                  </div>
                </div>
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- jQuery Knob -->
<!-- page script -->


</body>
</html>
