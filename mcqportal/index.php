<?php
  session_start();

  if(isset($_SESSION['demo']) && isset($_GET['p'])){
          
          $type=0;
          $subject_id =$_GET['p'];
          $user_id =$_SESSION['demo'];
  }
  elseif(isset($_SESSION['final']) && isset($_GET['p'])) {
          
          $type=1;
          $subject_id =$_GET['p'];
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
    <?php
        $con = mysqli_connect("localhost","root","","mcqportal");
       // if(!isset($_SESSION['exam-started'])){
       //   header('location: dashboard.php?exam=1');
       // }
       ?>
    <!-- Include Head -->
      <?php include 'head.php'; ?>
      <!-- sound effect -->
      <?php include 'soundscript.php'?>
      <!-- sound effect end -->
      <link rel="stylesheet" type="text/css" href="quiz/quiz_style.css">
      <style type="text/css">
         body{
         background:#cccccc;
         }
         .myslide{
           position: absolute!important;
         }
      </style>
  </head>
<?php
        // $subject_id =$_GET['p'];
        
        // $query = "SELECT `subject_id`, `name` FROM `chapter_master` WHERE `id` = '$subject_id'";
        // $result = mysqli_query($con, $query);
        // $row = mysqli_fetch_array($result);
        // $subject_id = $row['subject_id'];
        // $chapter_name = $row['name'];
        
        $query = "SELECT `name`,`image` FROM `subject_master` WHERE `id` = '$subject_id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        $subject_name = $row['name'];
        $subject_image = $row['image'];
?>
  <body>

   <div class="wrapper">
         <div class="header">
          <!-- subject name -->
            <div class="text-center subjecttitle animatedParent animateOnce row">
               <div class=" animated bounceInDown col-10">
                  <img class="subjecttitleimg img-responsive" src="images/<?php echo $subject_image;?>">
                  <?php echo $subject_name; ?>
                </div>
                 <div id="display" class="text-right col-2" style="font-size:2rem;font-weight: 700;color: #ffffff;" ></div>
            </div>
            <!-- //subject name -->
         </div>

        <main role="main" class="main container-fluid main-raised">
          <!-- All Content Starts From Here -->
            <div class="subjectcontainer">
               <div class="container animatedParent animateOnce">
                 <!--  <div class="row animated bounceInUp slowest" style="background: linear-gradient(60deg, #29b6f6, #0288d1)!important;padding: 10px;box-shadow: 0px 5px 20px 0px rgb(0,0,0,0.3);">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 10px;">
                           <div class="mycardtitle text-center">
                                 <h2><b style="color: white;"><?php echo $chapter_name; ?></b></h2>
                              </div>
                        </div>
                  </div> -->
                   <div class="row animated bounceInUp slowest mt-5" style="background-color: white;box-shadow: 0px 5px 20px 0px rgb(0,0,0,0.3);">
                        <?php

                          $q = "SELECT * FROM `mcq_test` WHERE `subject_id` = '$subject_id' AND `test_type`= $type ";
                          $res = mysqli_query($con, $q);
                          $i = 0;


                        ?>
                       <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mx-auto card-image2" style="padding: 20px;background-image: url(images/<?php echo $subject_image;?>);">
                          <form method="post" name="quiz" id="quiz_form" action="submit_test.php?p=<?php echo $user_id ?>" >
                            <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>">
                            <div class="quiz-container" style="color: #3C4858;">
                              <div id="quiz">
                                <?php while($row = mysqli_fetch_array($res)){ ?>
                                <div class="myslide slide <?php if($i == 0){ echo "active-slide"; }?>">
                                   <div class="questioncard"> <?php echo $row['question']; ?> </div>
                                   <div class="answers mt-3"> <label>
                                     <input type="radio" name="question_<?php echo $i; ?>" value="1">
                                      a :
                                      <?php echo $row['option1']; ?>
                                   </label><label>
                                     <input type="radio" name="question_<?php echo $i; ?>" value="2">
                                      b :
                                      <?php echo $row['option2']; ?>
                                   </label><label>
                                     <input type="radio" name="question_<?php echo $i; ?>" value="3">
                                      c :
                                      <?php echo $row['option3']; ?>
                                   </label><label>
                                     <input type="radio" name="question_<?php echo $i; ?>" value="4">
                                      d :
                                      <?php echo $row['option4']; ?>
                                   </label> </div>
                                 </div>
                                 <input type="hidden" name="question_id_<?php echo $i; ?>" value="<?php echo $row['question_id']; ?>">
                                 <input type="hidden" name="ival" value="<?php echo $i; ?>">
                                 <?php $i++; } ?>
                              </div>
                            </div>
                          <!--   <div class="col-lg-12 col-md-12 col-sm-12 col-md-12"> -->
                              <div class="row" style="margin-top:65px;">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-1 mb-2 mx-auto text-center">
                                   <button id="previous" type="button" class="mybutton btn-block mobile-block" onmousedown="beep3.play()"><i class="fas fa-arrow-left"></i> Previous Question</button>
                                </div>
                                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-1 mb-2 mx-auto text-center">
                                    <button id="next" type="button" class="mybutton btn-block mobile-block" onmousedown="beep3.play()"><i class="fas fa-arrow-right"></i> Next Question</button>
                                </div>
                                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-1 mb-2 mx-auto text-center">
                                    <button id="submit2" type="submit" class="mybutton btn-block mobile-block" onmousedown="beep3.play()"><i class="fas fa-clipboard-list"></i> Submit Quiz</button>
                                </div>
                              </div>

                           <!--  </div> -->


                            <div id="results"></div>


                          </form>
                        </div>
                        <script type="text/javascript">
(function() {

  function showSlide(n) {
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    currentSlide = n;

    if (currentSlide === 0) {
      previousButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }

    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  const submitButton = document.getElementById("submit2");
  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  showSlide(0);

  // on submit, show results
  submitButton.addEventListener("click", function(){
    document.form.submit();
  });
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();
</script>

<script>
  function CountDown(duration, display) {
    if (!isNaN(duration)) {
        var timer = duration, minutes, seconds;

      var interVal=  setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
            if (--timer < 0) {
                timer = duration;
               SubmitFunction();
               $('#display').empty();
               clearInterval(interVal)
            }
            },1000);
    }
}

function SubmitFunction(){
document.getElementById("quiz_form").submit();
}

 CountDown(1500,$('#display'));

</script>

                  </div>
                  </div>
                </div>



        <!-- End of Main -->
        </main>
    </div>
 <!-- footer -->
 
      <!-- footer scripts ends -->
      <?php include'animationscript.php'; ?>

</body>
</html>
