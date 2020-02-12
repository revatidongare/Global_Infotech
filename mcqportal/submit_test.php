<?php
  session_start();

  if(isset($_SESSION['demo'])) {
          
          $type=0;
          $user_id =$_SESSION['demo'];
  }
  elseif(isset($_SESSION['final'])) {
          
          $type=1;
          $user_id =$_SESSION['final'];
    }
  else{
      header('location:../index.php');
    } 
  ?> 

<!doctype html>
<html lang="en">
  <head>
    <title>MCQ PORTAL</title>
    <!--  -->
    <!-- Include Head -->
      <?php include 'head.php';?>
      <!-- sound effect -->
      <?php include 'soundscript.php'?>
      <!-- sound effect end -->
      <style type="text/css">
         body{
         background:#cccccc;
         }
          .questioncard{
          font-size: 24px;
          margin-top: 2%;
         }
         .answers {
          margin-bottom: 20px;
          text-align: left;
          display: inline-grid;
        }

      </style>
  </head>
<?php

         $scored = 0;
         $tot = 0;
            
        $subject_id = $_POST['subject_id'];
             
        $query = "SELECT `name` FROM `subject_master` WHERE `id` = '$subject_id'";
        include 'config.php';        
        $stmt=$conn->prepare($query);
        $stmt->execute();
        $row=$stmt->fetch();
        $conn=null;
        $subject_name = $row['name'];

?>
  <body>

   <div class="wrapper">
         <div class="header">
            <!-- Include Navbar -->
            
            <!-- subject name -->
            <div class="text-center subjecttitle animatedParent animateOnce">
               <div class=" animated bounceInDown">
                   <?php echo $subject_name; ?>
               </div>
            </div>
            <!-- //subject name -->
         </div>

        <main role="main" class="main container-fluid main-raised">
          <!-- All Content Starts From Here -->
            <div class="subjectcontainer">
               <div class="container animatedParent animateOnce">
                 <div class="row animated bounceInUp slowest" style="background: linear-gradient(60deg, #29b6f6, #0288d1)!important;padding: 10px;box-shadow: 0px 5px 20px 0px rgb(0,0,0,0.3);">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 10px;">
                           <div class="mycardtitle text-center">
                               <h6 style="color: white;">Congrats!!You have completed your test.</h6>
                              </div>
                        </div>
                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right mx-auto" style="padding: 10px;background: transparent;">
                           <div id="display" class="text-right" style="font-size: 1.5rem;font-weight: 700;color: #ffffff;vertical-align: middle;">
                            <div class="card">
                             <div class="card-body text-primary text-center">
                               <h2 id="score"></h2>
                               <h5>Total Points</h5>
                               <hr>
                               <h2 id="tot"></h2>
                               <h5>Out of Points</h5>
                             </div>
                            </div>
                           </div>
                        </div>

                  </div>
                     <div class="row animated bounceInUp slowest mt-5" style="background-color: white;">
                         <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mx-auto card-image2" style="padding: 20px;">
                          <h3 class="text-center text-primary"><b>Analyze your answers!</b></h3>

                          <?php

                                 //$user_id = 1;
                                $ival = $_POST['ival'];
                                $remark = 2;
                                // echo $ival;

                              for($i = 0 ; $i <= $ival ; $i++){

                                  if(isset($_POST["question_$i"])) {
                                    # code...
                                    $std_ans = $_POST["question_$i"];
                                  }else{
                                    $std_ans = 0;
                                  }

                                  $question_id = $_POST["question_id_$i"];

                                  $w = "SELECT * FROM `question` WHERE `question_id` = '$question_id' AND `test_type`='$type'";
                                  include 'config.php';        
                                  $stmt=$conn->prepare($w);
                                  $stmt->execute();
                                  $r=$stmt->fetch();
                                  $conn=null;
                                  $answer = $r['answer'];



                                  if($std_ans == $answer){
                                    $remark = 1;
                                    $scored++;
                                  }
                                  else{
                                    $remark = 0;
                                  }

                                  $tot++;

                                  $q = "INSERT INTO `answers`(`question_id`, `user`, `student_answer`, `actual_answer`, `remark`) VALUES ('$question_id', '$user_id', '$std_ans', '$answer', '$remark' )";
                                   include 'config.php';        
                                    $out=$conn->prepare($q);
                                    $out->execute();
                                    $conn=null;
                                 
                                }



                                  $q2 = "INSERT INTO `student_mcq_test`(`subject_id`, `user_id`,`scored`,`total`) VALUES ('$subject_id', '$user_id','$scored','$tot')";
                                   include 'config.php';        
                                    $out2=$conn->prepare($q2);
                                    $out2->execute();
                                    $conn=null;

                                  if($out2){
                                    $q3 = "SELECT * FROM `answers` WHERE `user` = '$user_id' AND `question_id` IN (
                                      SELECT `question_id` FROM `question` WHERE `subject_id` = '$subject_id'
                                    )";
                                     include 'config.php';        
                                    $out3=$conn->prepare($q3);
                                    $out3->execute();
                                    $row3=$out3->fetchAll();
                                    $conn=null;
                                    $i = 1;
                                    
                                    foreach($row3 as $res ){
                                      $question_id = $res['question_id'];
                                      $q4 = "SELECT * FROM `question` WHERE `question_id` = '$question_id' AND `test_type`='$type'";
                                      include 'config.php';        
                                    $out4=$conn->prepare($q4);
                                    $out4->execute();
                                    $row2=$out4->fetch();
                                    $conn=null;
                                      ?>

                                      <?php
                                      if($res['remark'] == 1){
                                        ?>
                                        <div class="solutioncard mt-5" style="background-color: #47d147;box-shadow: 0px 5px 20px 0px rgb(0,0,0,0.3);padding: 10px;color: white;">
                                        <div class="questioncard" >Question : <?php echo $row2['question']; ?></div>
                                        <p class="option mt-1 mb-2">Option 1: <?php echo $row2['option1']; ?></p>
                                        <P class="option mt-1 mb-2">Option 2: <?php echo $row2['option2']; ?></P>
                                        <P class="option mt-1 mb-2">Option 3: <?php echo $row2['option3']; ?></P>
                                        <P class="option mt-1 mb-2">Option 4: <?php echo $row2['option4']; ?></P>
                                         <p style="margin-bottom: 0px;padding: 20px;background-color: white;" class="text-success">You are right! correct answer is Option <?php echo $res['actual_answer'];?></p>
                                      </div>
                                        <?php
                                       }
                                       if($res['remark'] == 0){
                                        ?>
                                        <div class="solutioncard mt-5" style="background-color: #ff4d4d;box-shadow: 0px 5px 20px 0px rgb(0,0,0,0.3);padding: 10px;color: white;">
                                        <div class="questioncard" >Question : <?php echo $row2['question']; ?></div>
                                        <p class="option mt-1 mb-2">Option 1: <?php echo $row2['option1']; ?></p>
                                        <P class="option mt-1 mb-2">Option 2: <?php echo $row2['option2']; ?></P>
                                        <P class="option mt-1 mb-2">Option 3: <?php echo $row2['option3']; ?></P>
                                        <P class="option mt-1 mb-2">Option 4: <?php echo $row2['option4']; ?></P>
                                         <p style="margin-bottom: 0px;padding: 20px;background-color: white;" class="text-danger">You are wrong! correct answer is Option <?php echo $res['actual_answer'];?></p>
                                      </div>
                                        <?php
                                       }
                                       ?>


                                      <?php
                                      
                                      $i++;
                                    }
                                  }

                            ?>

                         </div>
                  </div>
                  </div>
                </div>



        <!-- End of Main -->
        </main>
    </div>
 <!-- footer -->
 <script type="text/javascript">
   document.getElementById("score").innerHTML = "<?php echo $scored; ?>";
   document.getElementById("tot").innerHTML = "<?php echo $tot; ?>";
 </script>
    
      <!-- footer scripts ends -->
      <?php include'animationscript.php'; ?>

</body>
</html>
<?php
  //session_start();
  session_unset();
  session_destroy();
  //header('location:../index.php');

?>