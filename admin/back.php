<?php
	
	if(isset($_POST['add_key'])){
		include 'config.php';
		$school = $_POST['school'];
		$test_key = $_POST['test_key'];
				
		$query = "INSERT INTO `key_table`(`test_key`,`school`) VALUES ('$test_key','$school')";
		 $stmt=$conn->prepare($query);
         $stmt->execute();
		if($stmt){
			header('location:test_key.php?q=1');
		}
		else{
			header('location:test_key.php?q=3');
		}
	}
	elseif(isset($_POST['add_Subject'])){
		include 'config.php';
		$name = $_POST['name'];
						
		$query = "INSERT INTO `subject_master`(`name`) VALUES ('$name')";
		 $stmt=$conn->prepare($query);
         $stmt->execute();
		if($stmt){
			header('location:manage_subject.php?q=1');
		}
		else{
			header('location:manage_subject.php?q=3');
		}
	}
	elseif(isset($_POST['add_question'])){
		include 'config.php';
		$subject_id = $_POST['subject_id'];
		$question = $_POST['question'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];
		$test_type = $_POST['test_type'];
				
		$query = "INSERT INTO `question`(`subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `test_type`) VALUES ('$subject_id', '$question', '$option1', '$option2','$option3','$option4','$answer','$test_type')";
		 $stmt=$conn->prepare($query);
         $stmt->execute();

		if($stmt){

			if($test_type == 1){
			
			header('location:final_test.php?q=1');
			}
			elseif($test_type == 0){
			
			header('location:demo_test.php?q=1');
			}
			else{
				header('location:index.php?q=3');
			}

		}
		else{
		
			header('location:demo_test.php?q=3');
		}

		
	}
	
	//For View Code....
	elseif (isset($_POST['view'])) {
		
		if ($_POST['view'] == 'view_question') {
				include 'config.php';
			if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `question` WHERE `question_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
		}
	}
	elseif (isset($_POST['update'])) {
		
		if ($_POST['update'] == 'key') {
				include 'config.php';
			if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `key_table` WHERE `key_id` = $id ";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
		}
		elseif ($_POST['update'] == 'update_Subject') {
				include 'config.php';
			if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `subject_master` WHERE `id` = $id ";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
		}
	}
	// update question
	elseif (isset($_POST['update_question'])) {
		include 'config.php';
		$id = $_POST['question_id'];
		$subject_id =$_POST['subject_id'];
		$question = $_POST['question'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];
		$test_type = $_POST['test_type'];

		 $query = "UPDATE `question` SET `subject_id`='$subject_id',`question`='$question' ,`option1`='$option1',`option2`='$option1',`option3`='$option3',`option4`='$option4',`answer`='$answer',`test_type`= '$test_type' WHERE `question_id`='$id'";	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();
				  $conn=null;
		if($res){

			if($test_type == 1){
			
			header('location:final_test.php?q=1');
			}
			elseif($test_type == 0){
			
			header('location:demo_test.php?q=1');
			}
			else{
				header('location:index.php?q=3');
			}

		}
		else{
		
			header('location:demo_test.php?q=3');
		}
	}
	elseif (isset($_POST['update_key'])) {
		include 'config.php';
		$id = $_POST['key_id'];
		$school =$_POST['school'];
		$test_key = $_POST['test_key'];
		
		 $query = "UPDATE `key_table` SET `test_key`='$test_key',`school`='$school' WHERE `key_id`='$id'";	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();
				  $conn=null;
				if($res){
					header('location:test_key.php?q=update1010');
						}
				else{
					header('location:test_key.php?q=3');
				}
	}
	elseif (isset($_POST['updatesubject'])) {
		include 'config.php';
		$id = $_POST['subject_id'];
		$name =$_POST['name'];
				
		 $query = "UPDATE `subject_master` SET `name`='$name' WHERE `id`='$id'";	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();
				  $conn=null;
				if($res){
					header('location:manage_subject.php?q=update1010');
						}
				else{
					header('location:manage_subject.php?q=3');
				}
	}
	elseif(isset($_POST['select_subject'])) {

			include 'config.php';
			
					$id = $_POST['subject_type'];
					
		if ($row) {
			header('location:final_test.php?p=101');
		}else{
					$query = "SELECT * FROM `subject_master` WHERE `id`='$id' ";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
		                 if ($row) {
		                 $name =$row['name'];
		                 header("location:final_test.php?subject=".$id ."&subject_name=".$name);
		                 }else{
		                 	header("location:final_test.php");
		                 }	
			}		
	  }

	else{
			header('location:index.php?q=3');
	}

  ?>

 