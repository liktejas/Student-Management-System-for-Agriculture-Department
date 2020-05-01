<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/bootstrap/images/mpkv icon.png'; ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
      -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/buttons.bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-blue.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">

      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/minimal/_all.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php //echo base_url(); ?>assets/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php //echo base_url(); ?>assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
  #loading{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #fff 
    url(<?php echo base_url().'assets/bootstrap/images/preloader.gif'; ?>)
    no-repeat center;
    z-index: 99999;
  }
</style>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini" onload="myFunction()">
  <div id="loading"></div>
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>AP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin Panel</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- <li class="dropdown user user-menu"> -->
              <!-- Menu Toggle Button -->
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"> -->
                <!-- The user image in the navbar-->

                <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <!-- <span class="btn-primary">Logout</span>
            </a>
            <ul class="dropdown-menu"> -->
              <!-- The user image in the menu -->
              <!-- <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li> -->
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
                <!-- </li> -->
                <!-- Menu Footer-->
              <!-- <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li> -->
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url(); ?>signout"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin <?php echo $this->session->userdata('name'); ?></p>
          <!-- Status -->
          
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-tachometer"></i> <span>Basic Student Info.</span></a></li>
        <li><a href="<?php echo base_url(); ?>export"><i class="fa fa-table"></i> <span>Student Exportable Data</span></a></li>
        <!-- <li><a href="<?php //echo base_url(); ?>docs"><i class="fa fa-file-text"></i> <span>Add Student Documents</span></a></li>
        <li><a href="<?php //echo base_url(); ?>add_lc"><i class="fa fa-info-circle"></i> <span>Add Detailed Student Info.</span></a></li> -->
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
        <li class="treeview">
            <a href="#"><i class="fa fa-book"></i> <span>Admission Documents</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>docs"><i class="fa fa-file-text"></i> <span>Add Admission Documents</span></a></li>
              <li><a href="<?php echo base_url(); ?>doc_change"><i class="fa fa-file"></i><span>Edit Admission Documents</span></a></li>
              <!-- <li><a href="#">Link in level 2</a></li> -->
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-info"></i> <span>Student L.C.</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>add_lc"><i class="fa fa-info-circle"></i><span>Add Student L.C.</span></a></li>
              <li><a href="<?php echo base_url(); ?>lc_change"><i class="fa fa-info-circle"></i><span>Edit Student L.C.</span></a></li>
              <!-- <li><a href="#">Link in level 2</a></li> -->
            </ul>
          </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Page Header
        <small>Optional description</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Basic Student Information</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <!-- <div class="container"> -->
        <!-- Page Heading -->
        <!-- <div class="row"> -->
          <!-- <div class="col-12"> -->
            <div class="col-md-12">
              <h1>Basic Student Information
                <!-- <div class="float-right"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Student Marks</a></div> -->
              </h1>
            </div>
            <div class="table table-responsive">
              <table class="table table-bordered table-striped table-hover" id="mydata">
                <thead class="thead-dark">
                  <tr>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Roll No.</th>
                    <th style="text-align:center;">Registration No.</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;">Date of Birth</th>
                    <th style="text-align:center;">Gender</th>
                    <th style="text-align:center;">Address</th>
                    <th style="text-align:center;">Contact</th>
                    <!-- <th style="text-align:center;">Actions</th> -->
                  </tr>
                </thead>

                <?php
                foreach ($students as $row)
                {
                  ?>

                  <tr>
                    <td><center><?php echo $row->id; ?></center></td>
                    <td><center><?php echo $row->rollno; ?></center></td>
                    <td><center><?php echo $row->regno; ?></center></td>
                    <td><center><?php echo $row->name; ?></center></td>
                    <td><center><?php echo $row->dob; ?></center></td>
                    <td><center><?php echo $row->gender; ?></center></td>
                    <td style="max-width:100px;"><center><?php echo $row->address; ?></center></td>
                    <td><center><?php echo $row->contact; ?></center></td>
                        <!-- <td>
                            <a href="<?php //echo base_url()."Main/edit/".$row->id; ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                            <a href="<?php //echo base_url()."Main/delete/".$row->id; ?>" class="btn btn-danger" onclick="alert('This record is deleted');"><i class="fa fa-trash"></i></a>
                          </td> -->
                        </tr>

                        <?php
                      }
                      ?>

                      <tbody id="show_data">

                      </tbody>
                    </table>
                  </div>
                <!-- </div> -->
              <!-- </div> -->
            <!-- </div> -->

          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
            Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2020 Company.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <!-- <aside class="control-sidebar control-sidebar-dark"> -->
          <!-- Create the tabs -->
    <!-- <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul> -->
    <!-- Tab panes -->
    <!-- <div class="tab-content"> -->
      <!-- Home tab content -->
      <!-- <div class="tab-pane active" id="control-sidebar-home-tab"> -->
        <!-- <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="<?php //echo base_url(); ?>assets/javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul> -->
        <!-- /.control-sidebar-menu -->

        <!-- <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li> -->
            <!-- <a href="<?php //echo base_url(); ?>assets/javascript:;"> -->
              <!-- <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4> -->

              <!-- <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div> -->
              <!-- </a> -->
          <!-- </li>
          </ul> -->
          <!-- /.control-sidebar-menu -->

          <!-- </div> -->
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <!-- <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div> -->
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
      <!-- <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div> -->
          <!-- /.form-group -->
        <!-- </form>
        </div> -->
        <!-- /.tab-pane -->
        <!-- </div> -->
        <!-- </aside> -->
        <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <!-- <div class="control-sidebar-bg"></div> -->
   <!-- </div> -->
   <!-- ./wrapper -->

   <!-- REQUIRED JS SCRIPTS -->

   <!-- jQuery 2.2.3 -->
   <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <!-- Bootstrap 3.3.6 -->
   <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
   <!-- AdminLTE App -->
   <script src="<?php echo base_url(); ?>assets/dist/js/app.js"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Morris.js charts -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/raphael-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>

  <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
     <!-- <script src="<?php //echo base_url(); ?>assets/bootstrap/js/jquery-3.3.1.js"></script> -->
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/dataTables.bootstrap4.min.js"></script>
     <!-- <script src="<?php echo base_url(); ?>assets/bootstrap/js/buttons.min.js"></script> -->




     <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/datatables.buttons.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/buttons.flash.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/jszip.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/pdfmake.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/vfs_fonts.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/buttons.html5.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/bootstrap/js/buttons.print.min.js"></script>

     <script>
      $(document).ready(function() {
    //show_student(); //call function show all student
    var mydata = $('#mydata').DataTable({
          // dom: 'Bfrtip',

            // buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            // pagination : true     

          });
    mydata
          .order( [ 0, 'desc' ] )
          .draw();

  } );
</script>
<script>

  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });

  //Date picker
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
  })

  $('#edit_datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
  })

  var preloader = document.getElementById('loading');

  function myFunction()
  {
    preloader.style.display = 'none';
  }


</script>

</body>
</html>
