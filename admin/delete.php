<?php 
	include 'config.php';

	$record_id = $_GET['q'];
	$table_name = $_GET['table_name'];
	
	if($table_name == "key_table"){
	 	
		$query = "DELETE FROM `key_table` WHERE `key_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:test_key.php?q=deleted');
		}
		else{
			header('location:test_key.php?q=notdeleted');
		}
	}
	elseif($table_name == "demo_question"){
	 	
		$query = "DELETE FROM `mcq_test` WHERE `question_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:demo_test.php?q=deleted');
		}
		else{
			header('location:demo_test.php?q=notdeleted');
		}
	}
	elseif($table_name == "final_question"){
	 	
		$query = "DELETE FROM `mcq_test` WHERE `question_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:final_test.php?q=deleted');
		}
		else{
			header('location:final_test.php?q=notdeleted');
		}
	}

	else{
			header('location:index.php');
	}

 ?>