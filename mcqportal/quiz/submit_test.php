<?php
		# code...
		//include 'session.php';
		include '../config.php';
		$user_id = 1;
		$ival = $_POST['ival'];
		$chapter_id = $_POST['chapter_id'];
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

			$w = "SELECT * FROM `mcq_test` WHERE `question_id` = '$question_id'";
			$rest = mysqli_query($con, $w);
			$r = mysqli_fetch_array($rest);
			$answer = $r['answer'];

			if($std_ans == $answer){
				$remark = 1;
			}
			else{
				$remark = 0;
			}



			$q = "INSERT INTO `answers`(`question_id`, `user`, `student_answer`, `actual_answer`, `remark`) VALUES ('$question_id', '$user_id', '$std_ans', '$answer', '$remark' )";
			$out = mysqli_query($con, $q);
			var_dump($out);
			echo "Question id: $question_id<br>";
			echo "iVal: $i<br>";
			echo "Student answer: $std_ans<br>";
			echo "Answer: $answer<br>";
			echo "Remark: $remark<br>";
		}



			$q2 = "INSERT INTO `student_mcq_test`(`chapter_id`, `user_id`) VALUES ('$chapter_id', '$user_id')";
			$out2 = mysqli_query($con, $q2);
			var_dump($out2);

			if($out2){
				$q3 = "SELECT * FROM `answers` WHERE `user` = '$user_id' AND `question_id` IN (
					SELECT `question_id` FROM `mcq_test` WHERE `chapter_id` = '$chapter_id'
				)";
				$out3 = mysqli_query($con, $q3);
				$i = 1;
				while($row = mysqli_fetch_array($out3)){
					$question_id = $row['question_id'];
					$q4 = "SELECT * FROM `mcq_test` WHERE `question_id` = '$question_id'";
					$out4 = mysqli_query($con, $q4);
					$row2 = mysqli_fetch_array($out4);
					echo "<br>Question $i:".$row2['question']."<br>";
					echo "Option 1: ".$row2['option1']."<br>";
					echo "Option 2: ".$row2['option2']."<br>";
					echo "Option 3: ".$row2['option3']."<br>";
					echo "Option 4: ".$row2['option4']."<br>";
					if($row['remark'] == 1){
						echo "Option ".$row['actual_answer']." is correct answer and you got it right.<br>";
					}
					if($row['remark'] == 0){
						echo "Option ".$row['actual_answer']." is correct answer and you got it wrong. Your answer was ".$row['student_answer']."<br>";
					}
					$i++;
				}
			}
	
?>