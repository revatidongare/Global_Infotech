<?php
	/*
	*
	* OPERATION FOR Adding Category
	*
	*/
	if(isset($_POST['add_category'])){
		include 'config.php';
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
		
		if ($_POST['view'] == 'view_product') {
				include 'config.php';
			if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `product_master` WHERE `product_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
		}
	}

	// For  UPDATE Feaching code from Category table and product table code...
	if(isset($_POST['update'])){

		if ($_POST['update'] == 'update_product') {
				include 'config.php';

				if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `product_master` WHERE `product_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
				
		}

		if ($_POST['update'] == 'image_update') {
				include 'config.php';

				if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `product_master` WHERE `product_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
				
		}

		if ($_POST['update'] == 'update_gift') {
				include 'config.php';

				if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `gift_product` WHERE `product_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
				
		}

		if($_POST['update'] == 'update_slider') {
				include 'config.php';

				if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `slider` WHERE `slider_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
				
		}

		if ($_POST['update'] == 'update_offer') {
				include 'config.php';

				if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `offer` WHERE `offer_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
				
		}

		if($_POST['update'] == 'update_category'){
				include 'config.php';
				
				if(isset($_POST['id']))
				{
					$id = $_POST['id'];
					$query = "SELECT * FROM `category_master` WHERE `category_id` = $id";
					 $stmt=$conn->prepare($query);
			         $stmt->execute();
			         $row=$stmt->fetch();
	                 $conn=null;
					
					echo json_encode($row);
				}
				
		}
	}

	// UPDATE OFFER code...
		if(isset($_POST['update_offername'])){
			include 'config.php';
		$title = $_POST['title'];
		$offer_id = $_POST['offer_id'];
		$price =$_POST['price'];
		$description=$_POST['description'];
		$image= $_FILES["image"]["name"];
		
		
		if ($image == "") {
			 $query = "UPDATE `offer` SET `title`='$title',`price`='$price',`description`='$description' WHERE `offer_id` ='$offer_id'";
	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();

				if($res){
					header('location:manage_offers.php?q=update');
						}
				else{
					header('location:manage_offers.php?q=3');
				}
		}else{

			  $query = "SELECT * FROM `offer` WHERE `offer_id` = '$offer_id' ";
                       
                       $stmt=$conn->prepare($query);
                       $stmt->execute();
                       $result=$stmt->fetch();
                        $old_image=$result['image'];
                        $path = "../img/offers/$old_image";
 						unlink($path);
 	                    //delete before 
                        // if () {
                        // 	echo "file deleated su";
                        // }
              

			$target_dir = "../img/offers/";
			$temp = explode(".", $_FILES["image"]["name"]);
			$img = round(microtime(true)) . '.' . end($temp);
			$target_file = $target_dir . $img;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        //echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    //echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

			$query = "UPDATE `offer` SET `title`='$title',`price`='$price',`description`='$description',`image`='$img' WHERE `offer_id`= '$offer_id'";
	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();

				if($res){
					header('location:manage_offers.php?q=update');
						}
				else{
					header('location:manage_offers.php?q=3');
				}
		}
		
		}

	// UPDATE SLIDER code...
		if(isset($_POST['update_slidername'])){
			include 'config.php';
		$title = $_POST['title'];
		$slider_id = $_POST['slider_id'];
		$description=$_POST['description'];
		$image= $_FILES["image"]["name"];
		
		if ($image == "") {
			 $query = "UPDATE `slider` SET `title`='$title',`description`='$description' WHERE `slider_id` ='$slider_id'";
	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();

				if($res){
					header('location:manage_slider.php?q=update');
						}
				else{
					header('location:manage_slider.php?q=3');
				}
		}else{

			$query = "SELECT * FROM `slider` WHERE `slider_id` = '$slider_id' ";
                       
				$stmt=$conn->prepare($query);
				$stmt->execute();
				$result=$stmt->fetch();
				$old_image=$result['image'];
				$path = "../img/slider/$old_image";
				unlink($path);

			$target_dir = "../img/slider/";
			$temp = explode(".", $_FILES["image"]["name"]);
			$img = round(microtime(true)) . '.' . end($temp);
			$target_file = $target_dir . $img;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        //echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    //echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

			$query = "UPDATE `slider` SET `title`='$title',`description`='$description',`image`='$img' WHERE `slider_id` ='$slider_id'";
	
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();

				if($res){
					header('location:manage_slider.php?q=update');
						}
				else{
					header('location:manage_slider.php?q=3');
				}
		}
		
	}
	

	// UPDATE Category code...
	 if(isset($_POST['update_categoryname'])){
			include 'config.php';
		$name = $_POST['name'];
		$id = $_POST['category_id'];
		
		 $query = "UPDATE `category_master` SET `name`= '$name' WHERE `category_id` = $id";
	
		 $stmt=$conn->prepare($query);
		 $res=$stmt->execute();

		if($res){
			header('location:manage_products.php?q=update');
				}
		else{
			header('location:manage_products.php?q=3');
		}
	}

	// UPDATE Product code...
	if(isset($_POST['update_productname'])){
			include 'config.php';
			$name = $_POST['pname'];
			$product_id =$_POST['product_id'];
			$price =$_POST['price'];
			$SKU =$_POST['SKU'];
	      	$description=$_POST['description'];
			$expiry_date=$_POST['expiry_date'];

			$query = "UPDATE `product_master` SET `name`='$name',`price`='$price',`description`='$description',`SKU`='$SKU',`expiry_date`='$expiry_date' WHERE `product_id`= '$product_id'";
				 $stmt=$conn->prepare($query);
				 $res=$stmt->execute();
				 $conn=null;
					if($res){
						header('location:manage_products.php?q=update');
							}
					else{
						header('location:manage_products.php?q=3');
					}

		}

	//Code for adding gift product
		
	if(isset($_POST['add_gift'])){
		include 'config.php';
		$name = $_POST['name'];
		$price= $_POST['price'];
		$description= $_POST['description'];
		$SKU= $_POST['SKU'];
		
		$expiry_date= $_POST['expiry_date'];
		$image1= $_FILES["image1"]["name"];
		$image2= $_FILES["image2"]["name"];
		$image3= $_FILES["image3"]["name"];
		$image4= $_FILES["image4"]["name"];
		$image5= $_FILES["image5"]["name"];
		
		//file upload code.
		$target_dir = "../img/gifts/";

		$temp = explode(".", $_FILES["image1"]["name"]);
        $img1 = round(microtime(true)) . '.' . end($temp);

        $target_file1 = $target_dir . $img1;	
		//$target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
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

		$query="INSERT INTO `gift_product`(`name`, `price`, `SKU`, `image1`, `image2`, `image3`, `image4`, `image5`, `description`, `expiry_date`) VALUES ('$name',$price,'$SKU','$img1','$img2','$img3','$img4','$img5','$description','$expiry_date')";
		 $stmt=$conn->prepare($query);
         $stmt->execute();
		if($stmt){
			header('location:manage_gifts.php?q=6');
		}
		else{
			header('location:manage_gifts.php?q=3');
		}
	}
	
  ?>

 