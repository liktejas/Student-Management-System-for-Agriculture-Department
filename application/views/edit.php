<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Student</title>
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
  <div class="col-md-6" >
  <h2>Edit Student</h2>
  <form action="" method="POST" enctype="multipart/formdata" >
    
    <div class="form-group">
      <label for="">Roll No.:</label>
      <input type="text" class="form-control" id="rollno" autocomplete="off" value="<?php echo $id['rollno']; ?>" placeholder="Enter Roll No." name="rollno">
    </div>
    <div class="form-group">
      <label for="">Registration No.:</label>
      <input type="text" class="form-control" id="regno" autocomplete="off" value="<?php echo $id['regno']; ?>" placeholder="Enter Registration No." name="regno">
    </div> 
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control" id="name" autocomplete="off" value="<?php echo $id['name']; ?>" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group"></div>
      <label>Date of Birth</label>
      <input type="text" name="dob" class="form-control" id="datepicker" autocomplete="off" value="<?php echo $id['dob']; ?>">
      <br>
    <div class="form-group">
        <label class="col-md-2 col-form-label">Gender<font class="text-danger">*</font></label>
          <label>
                
                        <input type="radio" name="gender" class="minimal" value="पुरुष"
                        <?php
                              if($id['gender']=='पुरुष')
                              {
                                echo "checked";
                              }

                        ?>
                        >पुरुष

          </label>
          <label>
              <input type="radio" name="gender" class="minimal" value="महिला"
              <?php
                    if($id['gender']=='महिला')
                    {
                      echo "checked";
                    }

              ?>
              > महिला
          </label>                 
    </div>
    <div class="form-group">
      <label for="">Address:</label>
      <input type="text" class="form-control" id="address" autocomplete="off" value="<?php echo $id['address']; ?>" placeholder="Enter Roll No." name="address">
    </div>
    <div class="form-group">
      <label for="">Contact:</label>
      <input type="text" class="form-control" id="contact" autocomplete="off" value="<?php echo $id['contact']; ?>" placeholder="Enter Contact" name="contact">
    </div>
    
    <button type="update" name="update" class="btn btn-primary">Submit</button>&emsp;&emsp;&emsp;
    <a href="<?php echo base_url(); ?>export"><button type="button" class="btn btn-primary">Cancel</button></a>
  </form>
</div>
</div>

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

</body>
</html>
