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
        DATACENTER & TTC CAPACITY
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
 
<!--       <div class="row">
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>

          </div>
         
        </div>
      </div> -->

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <i class="fa fa-bolt"></i>

              <h3 class="box-title"><b>POWER PLANT</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body chart-responsive">
              <div class="row">
                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $pln; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f39c12" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #f39c12;"><b>PLN</b></h4></div>
                  <div class="knob-label"><h5 style="color: #f39c12;">CAPS 6600KVA N+0</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $genset; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f39c12" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #f39c12;"><b>GENSET</b></h4></div>
                  <div class="knob-label"><h5 style="color: #f39c12;">CAPS 3X1825KVA N+1</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $fueltank; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f39c12" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #f39c12;"><b>FUEL TANK</b></h4></div>
                  <div class="knob-label"><h5 style="color: #f39c12;">CAPS 35000L Backup 92 jam</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $lvmdp1; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f39c12" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #f39c12;"><b>LVMDP 1 (TRAFO)</b></h4></div>
                  <div class="knob-label"><h5 style="color: #f39c12;">CAPS 572KVA</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $lvmdp2; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f39c12" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #f39c12;"><b>LVMDP 2 (TRAFO)</b></h4></div>
                  <div class="knob-label"><h5 style="color: #f39c12;">CAPS 705KVA</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $lvmdp3; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f39c12" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #f39c12;"><b>LVMDP 3 (TRAFO)</b></h4></div>
                  <div class="knob-label"><h5 style="color: #f39c12;">CAPS 452KVA</h5></div>
                </div>
           

              </div>
              <!-- /.row -->
            </div>
            <!-- ========================= -->

            <div class="box-header with-border">
              <i class="fa fa-bolt"></i>

              <h3 class="box-title"><b>COOLING</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>

            <div class="box-body">
              <div class="row">
                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level3; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>DATACENTER ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 3</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level4; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>DATACENTER ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 4</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level6; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>DATACENTER ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 6</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level7; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>EXPAND DATA ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 7</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level8; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>SWITCHING ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 8</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level9_bss; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>BSS ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 9</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level9_transmisi; ?>" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#3c8dbc" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>TRANSMISI ROOM</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 9</h5></div>
                </div>
               

              </div>
              <!-- /.row -->
            </div>
            <!-- ======================== -->
            <div class="box-header with-border">
              <i class="fa fa-bolt"></i>

              <h3 class="box-title"><b>RACK SPACE</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>

            <div class="box-body chart-responsive">
              <div class="row">
                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level3_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>SERVER DC</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 3</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level4_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>SERVER DC</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 4</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level6_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>SERVER DC</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 6</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level7_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>EXPAND DATA</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 7</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level8_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>SWITCHING</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 8</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level9_bss_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>BSS</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 9</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level9_transmisi_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>TRANSMISI</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 9</h5></div>
                </div>

                <div class="col-md-2 text-center">
                  <input type="text" class="knob" value="<?= $level4_nonprod_r; ?>" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#FF6347" data-readonly="true">

                  <div class="knob-label"><h4 style="color: #3c8dbc;"><b>NON PRODUCTION</b></h4></div>
                  <div class="knob-label"><h5 style="color: #3c8dbc;">LEVEL 4</h5></div>
                </div>
              

              </div>
              <!-- /.row -->
            </div>          
          </div>
          <!-- /.box -->
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
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- jQuery Knob -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/js/jquery.knob.js"></script>
<!-- page script -->
<script>
  $(function () {
    "use strict";

    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30}
        // {label: "", value: 70}
      ],
      hideHover: 'auto'
    });
    
    
  });
</script>

<script>
  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */
  });
</script>
</body>
</html>
