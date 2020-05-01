<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Document Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/bootstrap/images/mpkv icon.png'; ?>">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/minimal/_all.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">
</head>
<body>
  <!-- <pre>
  <?php //print_r($id); ?>
  </pre> -->
  <div class="container">
    <div class="col-md-6" >
      <h2>View Student Document Information</h2>
      <form action="" method="POST" enctype="multipart/formdata" >

        <div class="form-group">
          <label>Roll No:&emsp;<input type="text" name="rollno" autocomplete="off" required value="<?php echo $id['rollno']; ?>"></label>
          
        </div>
        <!-- <div class="form-group">
          <label>नाव:&emsp;<?php echo $id['name']; ?></label>
          
        </div> -->
        <div class="form-group">
          <label>Registration No.:&emsp;<input type="text" name="regno" autocomplete="off" required value="<?php echo $id['regno']; ?>"></label>
          
        </div>


        <table class="table table-bordered table-responsive" style="background-color: #FFFFFF">
          <tbody>
            <tr>
              <td>
                <p><center><strong>अ. </strong><strong>क्र</strong></center></p>
              </td>
              <td>
                <p><center><strong>प्रमाणपत्राचा&nbsp; </strong><strong>प्रकार</strong></center></p>
              </td>
              <td>
                <p><center><strong>होय/</strong><strong>नाही</strong></center></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१</p>
              </td>
              <td>
                <p>एस. एस. सी. गुणपत्रक</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="marksheet" required class="minimal" value="होय"
                    <?php
                              if($id['marksheet']=='होय')
                              {
                                echo "checked";
                              }
                    ?>
                  >होय&nbsp;
                  <input type="radio" name="marksheet" required class="minimal" value="नाही"
                    <?php
                              if($id['marksheet']=='नाही')
                              {
                                echo "checked";
                              }
                    ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>२</p>
              </td>
              <td>
                <p>शाळा सोडल्याचा&nbsp; दाखला/ माध्यमीक/ उच्च माध्यमीक/ महाविद्यालय</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="lc" required class="minimal" value="होय"
                      <?php
                              if($id['lc']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;
                  <input type="radio" name="lc" required class="minimal" value="नाही"
                      <?php
                              if($id['lc']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>३</p>
              </td>
              <td>
                <p>७/१२ चा उतारा/शेतमजूर दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="seven" required class="minimal" value="होय"
                      <?php
                              if($id['seven']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;  
                  <input type="radio" name="seven" required class="minimal" value="नाही"
                      <?php
                              if($id['seven']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>४</p>
              </td>
              <td>
                <p>जातीचा दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="caste" required class="minimal" value="होय"
                      <?php
                              if($id['caste']=='होय')
                              {
                                echo "checked";
                              }

                        ?> 
                  >होय&nbsp;
                  <input type="radio" name="caste" required class="minimal" value="नाही"
                      <?php
                              if($id['caste']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>५</p>
              </td>
              <td>
                <p>नॉन क्रिमिलेयर प्रमाणपत्र</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="nonc" required class="minimal" value="होय"
                      <?php
                              if($id['nonc']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;
                  <input type="radio" name="nonc" required class="minimal" value="नाही"
                      <?php
                              if($id['nonc']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>६</p>
              </td>
              <td>
                <p>क्रिडा/ सांस्कृतीक कार्यक्रमाचे प्रमाणपत्र</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="sports" required class="minimal" value="होय"
                      <?php
                              if($id['sports']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;      
                  <input type="radio" name="sports" required class="minimal" value="नाही"
                      <?php
                              if($id['sports']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>७</p>
              </td>
              <td>
                <p>एन.सी.सी/ स्काउट/ एम.सी.सी बाबतचे प्रमाणपत्र</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="scout" required class="minimal" value="होय"
                      <?php
                              if($id['scout']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;
                  <input type="radio" name="scout" required class="minimal" value="नाही"
                      <?php
                              if($id['scout']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>८</p>
              </td>
              <td>
                <p>स्वातंत्रसैनिक असल्याबाबतचे प्रमाणपत्र</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="freedom" required class="minimal" value="होय"
                      <?php
                              if($id['freedom']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;
                  <input type="radio" name="freedom" required class="minimal" value="नाही"
                      <?php
                              if($id['freedom']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>९</p>
              </td>
              <td>
                <p>कृषी विद्यापीठ कर्मचारी दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="krushi" required class="minimal" value="होय"
                      <?php
                              if($id['krushi']=='होय')
                              {
                                echo "checked";
                              }

                        ?>
                  >होय&nbsp;
                  <input type="radio" name="krushi" required class="minimal" value="नाही"
                      <?php
                              if($id['krushi']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१०</p>
              </td>
              <td>
                <p>शेतकरी असल्याबद्दलचा दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="farmer" required class="minimal" value="होय"
                      <?php
                              if($id['farmer']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="farmer" required class="minimal" value="नाही"
                      <?php
                              if($id['farmer']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>११</p>
              </td>
              <td>
                <p>उमीदवारचे वडील/ आजी /माजी सैनिक दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="father" required class="minimal" value="होय"
                      <?php
                              if($id['father']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="father" required class="minimal" value="नाही"
                      <?php
                              if($id['father']=='नाही')
                              {
                                echo "checked";
                              }

                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१२</p>
              </td>
              <td>
                <p>उत्पन्नाचा दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="income" required class="minimal" value="होय"
                      <?php
                              if($id['income']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="income" required class="minimal" value="नाही"
                      <?php
                              if($id['income']=='नाही')
                              {
                                echo "checked";
                              }
                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१३</p>
              </td>
              <td>
                <p>अपंगत्वाचा दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="hand" required class="minimal" value="होय"
                      <?php
                              if($id['hand']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="hand" required class="minimal" value="नाही"
                      <?php
                              if($id['hand']=='नाही')
                              {
                                echo "checked";
                              }
                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१४</p>
              </td>
              <td>
                <p>खंडित शिक्षण प्रमाणपत्र</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="break" required class="minimal" value="होय"
                      <?php
                              if($id['break']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="break" required class="minimal" value="नाही"
                      <?php
                              if($id['break']=='नाही')
                              {
                                echo "checked";
                              }
                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१५</p>
              </td>
              <td>
                <p>प्रकल्पग्रस्त दाखला</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="project" required class="minimal" value="होय"
                      <?php
                              if($id['project']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="project" required class="minimal" value="नाही"
                      <?php
                              if($id['project']=='नाही')
                              {
                                echo "checked";
                              }
                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
            <tr>
              <td>
                <p>१६</p>
              </td>
              <td>
                <p>इतर</p>
              </td>
              <td>
                <p>
                  <input type="radio" name="other" required class="minimal" value="होय"
                      <?php
                              if($id['other']=='होय')
                              {
                                echo "checked";
                              }
                        ?>
                  >होय&nbsp;
                  <input type="radio" name="other" required class="minimal" value="नाही"
                      <?php
                              if($id['other']=='नाही')
                              {
                                echo "checked";
                              }
                        ?>
                  >नाही
                  </p>
              </td>
            </tr>
          </tbody>
        </table>

        <a href="#"><input type="submit" name="update" class="btn btn-primary"></a>&emsp;&emsp;&emsp;
        <a href="<?php echo base_url(); ?>doc_change"><button type="button" class="btn btn-info">Cancel</button></a>
      </form>
    </div>
  </div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
  <script>
  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });
  </script>

</body>
</html>
