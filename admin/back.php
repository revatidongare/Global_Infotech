<?php
	/*
	*
	* OPERATION FOR Adding Category
	*
	*/
	if(isset($_POST['add_category'])){
		include 'config.php';
		$name = $_POST['qu'];
		$name = $_POST['name'];
				
		$query = "INSERT INTO `category_master`(`name`) VALUES ('$name')";
		 $stmt=$conn->prepare($query);
         $stmt->execute();
		if($stmt){
			header('location:manage_products.php?q=1');
		}
		else{
			header('location:location:manage_products.php?q=3');
		}
	}
	/*
	*
	* OPERATION FOR Adding Product
	*
	*/
	
	if(isset($_POST['add_product'])){
		include 'config.php';
		$name = $_POST['name'];
		$price= $_POST['price'];
		$description= $_POST['description'];
		$SKU= $_POST['SKU'];
		$category=$_POST['category'];
		$expiry_date= $_POST['expiry_date'];
		$image1= $_FILES["image1"]["name"];
		$image2= $_FILES["image2"]["name"];
		$image3= $_FILES["image3"]["name"];
		$image4= $_FILES["image4"]["name"];
		$image5= $_FILES["image5"]["name"];
		
		//file upload code.
		$target_dir = "../img/products/";
		$temp = explode(".", $_FILES["image1"]["name"]);
		$img1 = round(microtime(true)) . '.' . end($temp);
		$target_file1 = $target_dir . $img1;
		$uploadOk = 1;
		$iconFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file1)) {
		    // echo "Sorry, file already exists.";
		    $uploadOk = 2;
		}
		// Allow certain file formats
		if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
		&& $iconFileType != "gif" ) {
	    	//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    	$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk != 1) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1)) {
		        echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your image1.";
		    }
		}
		// image2
		$temp = explode(".", $_FILES["image2"]["name"]);
		$img2 = round(microtime(true)) . '.' . end($temp);
		$target_file2 = $target_dir . $img2;
		$upload = 1;
		$iconFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file2)) {
		    // echo "Sorry, file already exists.";
		    $upload = 2;
		}
		// Allow certain file formats
		if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
		&& $iconFileType != "gif" ) {
	    	//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    	$upload = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($upload != 1) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2)) {
		        echo "The file ". basename( $_FILES["image2"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your image2.";
		    }
		}

		//	image3
		$temp = explode(".", $_FILES["image3"]["name"]);
		$img3 = round(microtime(true)) . '.' . end($temp);
		$target_file3 = $target_dir . $img3;
		$up = 1;
		$iconFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file3)) {
		    // echo "Sorry, file already exists.";
		    $up = 2;
		}
		// Allow certain file formats
		if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
		&& $iconFileType != "gif" ) {
	    	//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    	$up = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($up != 1) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3)) {
		        echo "The file ". basename( $_FILES["image3"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your image3.";
		    }
		}

		// image4
		$temp = explode(".", $_FILES["image4"]["name"]);
		$img4 = round(microtime(true)) . '.' . end($temp);
		$target_file4 = $target_dir . $img4;
		$Ok = 1;
		$iconFileType = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file4)) {
		    // echo "Sorry, file already exists.";
		    $Ok = 2;
		}
		// Allow certain file formats
		if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
		&& $iconFileType != "gif" ) {
	    	//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    	$Ok = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($Ok != 1) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file4)) {
		        echo "The file ". basename( $_FILES["image4"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your image4.";
		    }
		}
			//image5
		$temp = explode(".", $_FILES["image5"]["name"]);
		$img5 = round(microtime(true)) . '.' . end($temp);
		$target_file5 = $target_dir . $img5;
		$loadOk = 1;
		$iconFileType = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file5)) {
		    // echo "Sorry, file already exists.";
		    $loadOk = 2;
		}
		// Allow certain file formats
		if($iconFileType != "jpg" && $iconFileType != "png" && $iconFileType != "jpeg"
		&& $iconFileType != "gif" ) {
	    	//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    	$loadOk = 0;
		}
		
		if ($loadOk != 1) {
		} else {
		    if (move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file5)) {
		        echo "The file ". basename( $_FILES["image5"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your image5.";
		    }
		}

		$query = "INSERT INTO `product_master`(`name`, `price`, `image1`, `image2`, `image3`, `image4`, `image5`, `description`, `SKU`, `expiry_date`,`category`) VALUES ('$name',$price,'$img1','$img2','$img3','$img4','$image5','$description','$SKU','$expiry_date','$category')";
		 $stmt=$conn->prepare($query);
         $stmt->execute();
		if($stmt){
			header('location:manage_products.php?q=6');
		}
		else{
			header('location:manage_products.php?q=3');
		}
	}
	
	//For View Code....
	if (isset($_POST['view'])) {
		
		if ($_POST['view'] == 'view_question') {
				include 'config.php';
			if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `mcq_test` WHERE `question_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
		}
	}

	// update question

	if (isset($_POST['update_question'])) {
		include 'config.php';
		$id = $_POST['question_id'];
		$chapter_id =$_POST['chapter_id'];
		$question = $_POST['question'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$answer = $_POST['answer'];

		 $query = "UPDATE `mcq_test` SET `chapter_id`='$chapter_id',`question`='$question' ,`option1`='$option1',`option2`='$option1',`option3`='$option3',`option4`='$option4',`answer`='$answer' WHERE `question_id`='$id'";	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();
				  $conn=null;
				if($res){
					header('location:manage_test.php?q=update1010');
						}
				else{
					header('location:manage_test.php?q=3');
				}
	}

  ?>

 