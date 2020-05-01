<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/minimal/_all.css">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/bootstrap/images/mpkv icon.png'; ?>">
</head>
<body>
  <div class="container">
    <div id="div1">
    <div class="col-md-6" >
      <h2>Student Information</h2>
      <br>
      <form action="" method="POST" enctype="multipart/formdata" >
        <table class="table table-responsive table-bordered table-striped table-hover">
          <tr>
            <td><label>रोल नं :</label></td>
            <td><?php echo $rollno->rollno; ?></td>
          </tr>
          <tr>
            <td><label>नोंदणी क्रमांक:</label></td>
            <td><?php echo $rollno->regno; ?></td>
          </tr>
          <tr>
            <td><label>संपूर्ण नाव:</label></td>
            <td><?php echo $rollno->name; ?></td>
          </tr>
          <tr>
            <td><label>जन्म दिनांक :</label></td>
            <td><?php echo $rollno->dob; ?></td>
          </tr>
          <tr>
            <td><label>लिंग</label></td>
            <td><?php echo $rollno->gender; ?></td>
          </tr>
          <tr>
            <td><label>पत्ता:</label></td>
            <td><?php echo $rollno->address; ?></td>
          </tr>
          <tr>
            <td><label>संपर्क:</label></td>
            <td><?php echo $rollno->contact; ?></td>
          </tr>
        </table>
      </form>
    </div>
    </div>
  </div> 
  <center><button class="btn btn-info" onclick="printContent('div1')">Print</button>&emsp;&emsp;&emsp;&emsp;
  <a href="<?php echo base_url(); ?>export"><button type="button" class="btn btn-primary">Cancel</button></a></center>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(document).ready(function() {
    
      $('#datepicker').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    });

      $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });

  });
   
</script>
<script>
  function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>

</body>
</html>
