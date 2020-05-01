<!DOCTYPE html>
<html lang="en">
<head>
  <title>View LC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/bootstrap/images/mpkv icon.png'; ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
</head>
<body>
  <!-- <pre>
  <?php //print_r($rollno); ?>
</pre> -->
<div class="container">
  <!-- <div class="col-md-7" > -->
    <!-- <h2>View Student Document Information</h2> -->
    <form action="" method="POST" enctype="multipart/formdata" >
      <br>
      <div class="form-group">
        <label >क्रमांक:-  <input type="text" name="sr" autocomplete="off" required value="<?php echo $id['sr']; ?>">&emsp;&emsp;&emsp;&emsp;</label>
        <label >नोंदणी क्रमांक:-  <input type="text" name="regno" autocomplete="off" required value="<?php echo $id['regno']; ?>"></label>
      </div>
      <div class="form-group">
        <label>Roll No. <input type="text" name="rollno" autocomplete="off" required value="<?php echo $id['rollno'];?>"></label>
      </div>


      <table class="table-bordered table-responsive table-striped">
        <tbody>

          <tr>
            <td style="padding: 10px;"><center>1</center></td>
            <th style="padding: 10px;">विद्यार्थ्याचे पूर्ण नाव</th>
            <td style="padding: 10px;"><input type="text" name="name" autocomplete="off" class="form-control" required value="<?php echo $id['name']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>2</center></td>
            <th style="padding: 10px;">आईचे नाव</th>
            <td style="padding: 10px;"><input type="text" name="mother" autocomplete="off" class="form-control" required value="<?php echo $id['mother']; ?>"></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>3</center></td>
            <th style="padding: 10px;">धर्म व जात</th>
            <td style="padding: 10px;"><input type="text" name="religion" autocomplete="off" class="form-control" required value="<?php echo $id['religion']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>4</center></td>
            <th style="padding: 10px;">राष्ट्रियत्व</th>
            <td style="padding: 10px;">भारतीय</td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>5</center></td>
            <th style="padding: 10px;">जन्मस्थळ</th>
            <td style="padding: 10px;"><input type="text" name="birthplace" autocomplete="off" class="form-control" required value="<?php echo $id['birthplace']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>6</center></td>
            <th style="padding: 10px;">जन्म दिनांक अंकी</th>
            <td style="padding: 10px;"><input type="text" name="dob" id="datepicker" autocomplete="off" class="form-control" required value="<?php echo $id['dob']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center></center></td>
            <th style="padding: 10px;">व अक्षरी</th>
            <td style="padding: 10px;"><input type="text" name="dobwords" autocomplete="off" class="form-control" required value="<?php echo $id['dobwords']; ?>"></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>7</center></td>
            <th style="padding: 10px;">या विद्यालयात येण्यापूर्वीची शाळा/महाविद्यालय</th>
            <td style="padding: 10px;"><input type="text" name="preschool" autocomplete="off" class="form-control" required value="<?php echo $id['preschool']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>8</center></td>
            <th style="padding: 10px;">या विद्यालयात दाखल केल्याचा दिनांक</th>
            <td style="padding: 10px;"><input type="text" name="joindate" id="datepicker1" autocomplete="off" class="form-control" required value="<?php echo $id['joindate']; ?>"></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>9</center></td>
            <th style="padding: 10px;">अभ्यासातील प्रगती</th>
            <td style="padding: 10px;"><input type="text" name="progress" autocomplete="off" class="form-control" required value="<?php echo $id['progress']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>10</center></td>
            <th style="padding: 10px;">वर्तणूक</th>
            <td style="padding: 10px;"><input type="text" name="behave" autocomplete="off" class="form-control" required value="<?php echo $id['behave']; ?>"></td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>11</center></td>
            <th style="padding: 10px;">कृषी तंत्र विद्यालय सोडल्याचा दिनांक</th>
            <td style="padding: 10px;"><input type="text" name="leavedate" id="datepicker2" autocomplete="off" class="form-control" required value="<?php echo $id['leavedate']; ?>"></td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>12</center></td>
            <th style="padding: 10px;">कोणत्या वर्गात व केव्हापासून  शिकत होती</th>
            <td style="padding: 10px;">
              <select name="year" class="form-control" required>
                <option value="--Select--">--Select--</option>
                <option value="प्रथम वर्ष"
                <?php
                    if($id['year']=='प्रथम वर्ष')
                    {
                      echo 'selected';
                    }
                ?>
                >प्रथम वर्ष</option>
                <option value="द्वितीय वर्ष"
                <?php
                    if($id['year']=='द्वितीय वर्ष')
                    {
                      echo "selected";
                    }
                ?>
                >द्वितीय वर्ष</option>
              </select>
              <input type="text" name="fromdate" id="datepicker3" placeholder="(DD/MM/YYYY)" autocomplete="off" class="form-control" required value="<?php echo $id['fromdate']?>">
            </td>
          </tr>

          <tr>
            <td style="padding: 10px;"><center>13</center></td>
            <th style="padding: 10px;">कृषी तंत्र विद्यालय सोडल्याचे कारण</th>
            <td style="padding: 10px;">
              <select name="reason" required class="form-control">
                <option value="--Select--">--Select--</option>
                <option value="द्वितीय वर्ष उत्तीर्ण"
                <?php
                    if($id['reason']=='द्वितीय वर्ष उत्तीर्ण')
                    {
                      echo "selected";
                    }
                ?>
                >द्वितीय वर्ष उत्तीर्ण</option>
                <option value="विद्यार्थी विनंती अर्ज"
                <?php
                    if($id['reason']=='विद्यार्थी विनंती अर्ज')
                    {
                      echo "selected";
                    }
                ?>
                >विद्यार्थी विनंती अर्ज</option>
                <option value="सतत गैर हजर"
                <?php
                    if($id['reason']=='सतत गैर हजर')
                    {
                      echo "selected";
                    }
                ?>
                >सतत गैर हजर</option>
                <option value="इतर"
                <?php
                    if($id['reason']=='इतर')
                    {
                      echo "selected";
                    }
                ?>
                >इतर</option>
              </select>
            </td>
          </tr>
          <tr>
            <td style="padding: 10px;"><center>14</center></td>
            <th style="padding: 10px;">शेरा</th>
            <td style="padding: 10px;"><input type="text" name="remarks" autocomplete="off" class="form-control" required value="<?php echo $id['remarks']; ?>"></td>
          </tr>
        </tbody>
      </table>

      <br>
      <input type="submit" name="update" class="btn btn-primary">&emsp;&emsp;&emsp;
      <a href="<?php echo base_url(); ?>lc_change"><button type="button" class="btn btn-info">Cancel</button></a>
    </form>
    <!-- </div> -->
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
  </script>

</body>
</html>
