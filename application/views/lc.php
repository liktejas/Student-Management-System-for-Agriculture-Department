<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Data</title>
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

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-tachometer"></i> <span>Basic Student Info.</span></a></li>
          <li><a href="<?php echo base_url(); ?>export"><i class="fa fa-table"></i> <span>Student Exportable Data</span></a></li>
          <!-- <li><a href="<?php //echo base_url(); ?>docs"><i class="fa fa-file-text"></i> <span>Add Student Documents</span></a></li>
          <li class="active"><a href="<?php //echo base_url(); ?>add_lc"><i class="fa fa-info-circle"></i> <span>Add Detailed Student Info.</span></a></li>
          <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
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
              <li class="active"><a href="<?php echo base_url(); ?>add_lc"><i class="fa fa-info-circle"></i> <span>Add Student L.C.</span></a></li>
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
        <li class="active">Add Student L.C.</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <!-- <div class="container"> -->
        <!-- Page Heading -->
        <!-- <div class="row"> -->

          <div class="col-md-12">
            <h1 class="">Add Student L.C.
              <!-- <div class="float-right"><a href="" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Student Marks</a></div> -->
            </h1>
          </div>
          <!-- <div class="col-8"> -->
            <div class="table table-responsive">
              <form action="Main/add_lc_data" method="POST" enctype="multipart/formdata">
                <!-- <b>Roll No.</b> <input type="text" name="rollno" class="form-group"> -->
                <table class="table-bordered table-striped table-hover" style="background-color: #FFFFFF" >
                  <thead>
                    <tr>
                      <td style="padding: 10px;"><center>#</center></td>
                      <th style="padding: 10px;">रोल नं.</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="rollno" size="35" autocomplete="off" required></td>
                    </tr>
                    <tr>
                      <td style="padding: 10px;"><center>#</center></td>
                      <th style="padding: 10px;">क्रमांक</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="sr" size="35" autocomplete="off" required></td>
                      <th style="padding: 10px;"><center>#</center></th>
                      <th style="padding: 10px;">नोंदणी क्रमांक</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="regno" size="35" autocomplete="off" required></td>
                    </tr>
                    <tr>
                      <td style="padding: 10px;"><center>1</center></td>
                      <th style="padding: 10px;">विद्यार्थ्याचे पूर्ण नाव</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="name" size="35" autocomplete="off" required></td>
                      <td style="padding: 10px;"><center>2</center></td>
                      <th style="padding: 10px;">आईचे नाव</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="mother" size="35" autocomplete="off" required></td>
                    </tr>
                    
                    <tr>
                      <td style="padding: 10px;"><center>3</center></td>
                      <th style="padding: 10px;">धर्म व जात</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="religion" size="35" autocomplete="off" required></td>
                      <td style="padding: 10px;"><center>4</center></td>
                      <th style="padding: 10px;">राष्ट्रियत्व</th>
                      <td style="padding: 10px;">भारतीय</td>
                    </tr>
                    
                    <tr>
                      <td style="padding: 10px;"><center>5</center></td>
                      <th style="padding: 10px;">जन्मस्थळ</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="birthplace" size="35" autocomplete="off" required></td>
                    </tr>
                    <tr>
                      <td style="padding: 10px;"><center>6</center></td>
                      <th style="padding: 10px;">जन्म दिनांक अंकी</th>
                      <td style="padding: 10px;">
                        <!-- <div class="input-group date">   -->
                          <input type="text" class="form-control" name="dob" id="datepicker" placeholder="(DD/MM/YYYY)" autocomplete="off" required>
                        <!-- </div> -->
                        <!-- <td style="padding: 10px;"><center></center></td> -->
                      <th style="padding: 10px;" colspan="2">व अक्षरी</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="dobwords" size="35" autocomplete="off" required></td>
                      </td>
                    </tr>
                    
                    <tr>
                      <td style="padding: 10px;"><center>7</center></td>
                      <th style="padding: 10px;">या विद्यालयात येण्यापूर्वीची शाळा/महाविद्यालय</th>
                      <td style="padding: 10px;"><input type="text" class="form-control" name="preschool" size="35" autocomplete="off" required></td>
                      <td style="padding: 10px;"><center>8</center></td>
                      <th style="padding: 10px;">या विद्यालयात दाखल केल्याचा दिनांक</th>
                      <td style="padding: 10px;">
                        <!-- <div class="input-group date">   -->
                          <input type="text" class="form-control" name="joindate" id="datepicker1" placeholder="(DD/MM/YYYY)" autocomplete="off" required>
                        <!-- </div> -->
                      </td>
                    </tr>
                    
                      <tr>
                        <td style="padding: 10px;"><center>9</center></td>
                        <th style="padding: 10px;">अभ्यासातील प्रगती</th>
                        <td style="padding: 10px;"><input type="text" class="form-control" name="progress" size="35" autocomplete="off" required></td>
                        <td style="padding: 10px;"><center>10</center></td>
                        <th style="padding: 10px;">वर्तणूक</th>
                        <td style="padding: 10px;"><input type="text" class="form-control" name="behave" size="35" autocomplete="off" required></td>
                      </tr>
                      
                      <tr>
                        <td style="padding: 10px;"><center>11</center></td>
                        <th style="padding: 10px;">कृषी तंत्र विद्यालय सोडल्याचा दिनांक</th>
                        <td style="padding: 10px;">
                          <!-- <div class="input-group date">   -->
                          <input type="text" class="form-control" name="leavedate" id="datepicker2" placeholder="(DD/MM/YYYY)" autocomplete="off" required>
                        <!-- </div> -->
                      </td>

                        <td style="padding: 10px;"><center>12</center></td>
                        <th style="padding: 10px;">कोणत्या वर्गात व केव्हापासून  शिकत होता/ होती</th>
                        <td style="padding: 10px;">
                          <select name="year" required class="form-control">
                          <option value="">--Select--</option>
                          <option value="प्रथम वर्ष">प्रथम वर्ष</option>
                          <option value="द्वितीय वर्ष">द्वितीय वर्ष</option>
                        </select>
                        <input type="text" class="form-control" name="fromdate" id="datepicker3" placeholder="(DD/MM/YYYY)" autocomplete="off" required>
                        </td>
                        
                      </tr>
                      
                      <tr>
                        <td style="padding: 10px;"><center>13</center></td>
                        <th style="padding: 10px;">कृषी तंत्र विद्यालय सोडल्याचे कारण</th>
                        <td style="padding: 10px;">
                          <select name="reason" required class="form-control">
                            <option value="">--Select--</option>
                            <option value="द्वितीय वर्ष उत्तीर्ण">द्वितीय वर्ष उत्तीर्ण</option>
                            <option value="विद्यार्थी विनंती अर्ज">विद्यार्थी विनंती अर्ज</option>
                            <option value="सतत गैर हजर">सतत गैर हजर</option>
                            <option value="इतर">इतर</option>
                          </select>
                        </td>
                        <td style="padding: 10px;"><center>14</center></td>
                        <th style="padding: 10px;">शेरा</th>
                        <td style="padding: 10px;"><input type="text" class="form-control" name="remarks" size="35" autocomplete="off" required></td>
                      </tr>
                      
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                  </table>
                  <center><input type="submit" name="submit" class="btn btn-primary"></center>
                </form>
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

     <!-- <script>
      $(document).ready(function() {
    //show_student(); //call function show all student
    // var mydata = $('#mydata').DataTable({
    //   dom: 'Bfrtip',

    //   buttons: ['copy', 'excel', 'print'],   
    // });

  } );
</script> -->
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

  $('#datepicker1').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
  })

  $('#datepicker2').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
  })

  $('#datepicker3').datepicker({
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
