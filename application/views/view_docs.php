<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Admission Document Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url().'assets/bootstrap/images/mpkv icon.png'; ?>">
</head>
<body>
  <!-- <pre>
  <?php //print_r($rollno); ?>
  </pre> -->
  <div class="container">
    
    <div class="col-md-7" >
      <div id="div1">
      <h2>Student Admission Document Information</h2>
      <form action="" method="POST" enctype="multipart/formdata" >
        <br>

        <div class="form-group">
          <label>रोल नं :&emsp;<?php echo $rollno->rollno; ?></label>
          
        </div>
        <div class="form-group">
          <label>नाव:&emsp;<?php echo $rollno->name; ?></label>
          
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
                    <?php
                              if($rollno->marksheet=='नाही')
                              {
                                echo "नाही";
                              }
                              else
                              {
                                echo "होय";
                              }

                    ?>

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
                      <?php
                              if($rollno->lc=='होय')
                              {
                                echo "होय";
                              }

                        ?>
                  
                      <?php
                              if($rollno->lc=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->seven=='होय')
                              {
                                echo "होय";
                              }

                        ?>  
                  
                      <?php
                              if($rollno->seven=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->caste=='होय')
                              {
                                echo "होय";
                              }

                        ?> 
                  
                      <?php
                              if($rollno->caste=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->nonc=='होय')
                              {
                                echo "होय";
                              }

                        ?>
                  
                      <?php
                              if($rollno->nonc=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->sports=='होय')
                              {
                                echo "होय";
                              }

                        ?>
                  
                      <?php
                              if($rollno->sports=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->scout=='होय')
                              {
                                echo "होय";
                              }

                        ?>
                  
                      <?php
                              if($rollno->scout=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->freedom=='होय')
                              {
                                echo "होय";
                              }

                        ?>
                  
                      <?php
                              if($rollno->freedom=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->krushi=='होय')
                              {
                                echo "होय";
                              }

                        ?>
                  
                      <?php
                              if($rollno->krushi=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->farmer=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                  
                      <?php
                              if($rollno->farmer=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->father=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                 
                      <?php
                              if($rollno->father=='नाही')
                              {
                                echo "नाही";
                              }

                        ?>
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
                      <?php
                              if($rollno->income=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                  
                      <?php
                              if($rollno->income=='नाही')
                              {
                                echo "नाही";
                              }
                        ?>
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
                      <?php
                              if($rollno->hand=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                  
                      <?php
                              if($rollno->hand=='नाही')
                              {
                                echo "नाही";
                              }
                        ?>
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
                      <?php
                              if($rollno->break=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                  
                      <?php
                              if($rollno->break=='नाही')
                              {
                                echo "नाही";
                              }
                        ?>
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
                      <?php
                              if($rollno->project=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                  
                      <?php
                              if($rollno->project=='नाही')
                              {
                                echo "नाही";
                              }
                        ?>
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
                      <?php
                              if($rollno->other=='होय')
                              {
                                echo "होय";
                              }
                        ?>
                  
                      <?php
                              if($rollno->other=='नाही')
                              {
                                echo "नाही";
                              }
                        ?>
                  </p>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
    </div>
  </div>
  <center><button class="btn btn-info" onclick="printContent('div1')">Print</button>&emsp;&emsp;&emsp;&emsp;
  <a href="<?php echo base_url(); ?>doc_change"><button type="button" class="btn btn-primary">Cancel</button></a></center>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
