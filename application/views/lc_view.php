<!DOCTYPE html>
<html lang="en">
<head>
  <title>View LC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/bootstrap/images/mpkv icon.png'; ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <!-- <pre>
  <?php //print_r($rollno); ?>
</pre> -->
<div class="container">
  <div id="div1">
  <!-- <div class="col-md-7" > -->
    <!-- <h2>View Student Document Information</h2> -->
    <form action="Main/view_lc" method="POST" enctype="multipart/formdata" >
      <br>
      <div class="form-group">
        <label >क्रमांक:-  <?php echo $rollno->sr; ?>&emsp;&emsp;&emsp;&emsp;</label>
        <label >नोंदणी क्रमांक:-  <?php echo $rollno->regno; ?></label>
      </div>


      <table class="table-bordered table-responsive table-striped">
        <tbody>

          <tr>
            <td style="padding: 10px;"><center>1</center></td>
            <th style="padding: 10px;">विद्यार्थ्याचे पूर्ण नाव</th>
            <td style="padding: 10px;"><?php echo $rollno->name; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>2</center></td>
            <th style="padding: 10px;">आईचे नाव</th>
            <td style="padding: 10px;"><?php echo $rollno->mother; ?></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>3</center></td>
            <th style="padding: 10px;">धर्म व जात</th>
            <td style="padding: 10px;"><?php echo $rollno->religion; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>4</center></td>
            <th style="padding: 10px;">राष्ट्रियत्व</th>
            <td style="padding: 10px;">भारतीय</td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>5</center></td>
            <th style="padding: 10px;">जन्मस्थळ</th>
            <td style="padding: 10px;"><?php echo $rollno->birthplace; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>6</center></td>
            <th style="padding: 10px;">जन्म दिनांक अंकी</th>
            <td style="padding: 10px;"><?php echo $rollno->dob; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center></center></td>
            <th style="padding: 10px;">व अक्षरी</th>
            <td style="padding: 10px;"><?php echo $rollno->dobwords; ?></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>7</center></td>
            <th style="padding: 10px;">या विद्यालयात येण्यापूर्वीची शाळा/महाविद्यालय</th>
            <td style="padding: 10px;"><?php echo $rollno->preschool; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>8</center></td>
            <th style="padding: 10px;">या विद्यालयात दाखल केल्याचा दिनांक</th>
            <td style="padding: 10px;"><?php echo $rollno->joindate; ?></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>9</center></td>
            <th style="padding: 10px;">अभ्यासातील प्रगती</th>
            <td style="padding: 10px;"><?php echo $rollno->progress; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>10</center></td>
            <th style="padding: 10px;">वर्तणूक</th>
            <td style="padding: 10px;"><?php echo $rollno->behave; ?></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>11</center></td>
            <th style="padding: 10px;">कृषी तंत्र विद्यालय सोडल्याचा दिनांक</th>
            <td style="padding: 10px;"><?php echo $rollno->leavedate; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>12</center></td>
            <th style="padding: 10px;">कोणत्या वर्गात व केव्हापासून  शिकत होता/ होती</th>
            <td style="padding: 10px;"><?php echo $rollno->from_year; ?></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>13</center></td>
            <th style="padding: 10px;">कृषी तंत्र विद्यालय सोडल्याचे कारण</th>
            <td style="padding: 10px;"><?php echo $rollno->reason; ?></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>14</center></td>
            <th style="padding: 10px;">शेरा</th>
            <td style="padding: 10px;"><?php echo $rollno->remarks; ?></td>
          </tr>
        </tbody>
      </table>
      <br><br>
      <p><b>वरील माहिती नोंदणी पुस्तकाप्रमाणे आहे.</b></p><br>
      <b>दिनांक:-</b>
      <br><br><br><br>
      <p><b>कनिष्ठ संशोधन सहाय्यक&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;प्राचार्य</b></p>
      <b>कृषी तंत्र विद्यालय, धुळे&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; कृषी तंत्र विद्यालय, धुळे</b>
      
      
    </form>
    </div>
    <center><button class="btn btn-info" onclick="printContent('div1')">Print</button>&emsp;&emsp;&emsp;&emsp;
      <a href="<?php echo base_url(); ?>lc_change"><button type="button" class="btn btn-primary">Cancel</button></a></center>
  </div>
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
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
