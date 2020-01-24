<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
		<!-- <div style="font-weight: bold" id="quiz-time-left"></div> -->

    <?php 
      include '../config.php';
      //$chapter_id = $_GET['chapter'];
      $chapter_id = 1;
      $q = "SELECT * FROM `mcq_test` WHERE `chapter_id` = '$chapter_id'";
      $res = mysqli_query($con, $q);
      $i = 0;
    ?>
    <div id="display"></div>
	<form method="post" name="quiz" id="quiz_form" action="submit_test.php" >
    <input type="hidden" name="chapter_id" value="<?php echo $chapter_id; ?>">
		<h1>Quiz on Important Facts</h1>
		<div class="quiz-container">
		  <div id="quiz">
        <?php while($row = mysqli_fetch_array($res)){ ?>
		  	<div class="slide <?php if($i == 0){ echo "active-slide"; }?>">
           <div class="question"> <?php echo $row['question']; ?> </div>
           <div class="answers"> <label>
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
		<button id="previous" type="button">Previous Question</button>
		<button id="next" type="button">Next Question</button>
		<button id="submit2" type="submit">Submit Quiz</button>
		<div id="results"></div>


	</form>




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

<!-- <script type="text/javascript">
	var max_time = 1;
	var c_seconds  = 0;
	var total_seconds =60*max_time;
	max_time = parseInt(total_seconds/60);
	c_seconds = parseInt(total_seconds%60);
	document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
	function init(){
	document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
	setTimeout("CheckTime()",999);
	}
	function CheckTime(){
	document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds' ;
	if(total_seconds <=0){
	setTimeout('document.quiz.submit()',1);
	    
	    } else
	    {
	total_seconds = total_seconds -1;
	max_time = parseInt(total_seconds/60);
	c_seconds = parseInt(total_seconds%60);
	setTimeout("CheckTime()",999);
	}

	}
	init();
	</script>

	<script type="text/javascript">
	 function finishpage()
	{
	alert("unload event detected!");
	document.quiz.submit();
	}
	window.onbeforeunload= function() {
	setTimeout('document.quiz.submit()',1);
	}
	</script> -->
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

 CountDown(15,$('#display'));
      
</script>


</body>
</html>