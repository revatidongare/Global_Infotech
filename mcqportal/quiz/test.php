<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
		<!-- <div style="font-weight: bold" id="quiz-time-left"></div> -->

    <style type="text/css">
      .hide{
        display: none;
      }
    </style>

    <?php 
      include '../config.php';
      //$chapter_id = $_GET['chapter'];
      $chapter_id = 1;
      $q = "SELECT * FROM `time_management` WHERE `chapter_id` = '$chapter_id'";
      $res = mysqli_query($con, $q);
      $i = 0;
    ?>
    
	
    <input type="hidden" name="chapter_id" value="<?php echo $chapter_id; ?>">
		<h1>Quiz on Important Facts</h1>
		<div class="quiz-container">
		  <div id="quiz">
        <?php while($row = mysqli_fetch_array($res)){ ?>
          
		  	<div class="slide_<?php echo $i; ?> hide">
           <div class="question"> <?php echo $row['question']; ?> </div>
           <div class="answers" id="answer_<?php echo $i; ?>"> <?php echo $row['answer']; ?></div>
         </div>
         <script type="text/javascript">
           $("#next").onclick()
         </script>
         <?php $i++; } ?>
		  </div>
		</div>

    <button class="btn btn-primary" id="next">Next Question</button>


		

  
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '815972308753483',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.12'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div class="fb-customerchat" page_id="1199714046842678"></div>







</body>
</html>