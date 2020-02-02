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

	else{
			header('location:index.php');
	}

 ?>