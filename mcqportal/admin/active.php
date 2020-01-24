<?php 
	
	include 'config.php';
		$id = $_GET['q'];
		$table_name = $_GET['table_name'];
		$status = $_GET['status'];

		if($table_name == 'product_master'){

			if($status == 'active'){
				$query = "UPDATE `product_master` SET `flag`= 0 WHERE `product_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_products.php?q=statuschanged');
				}
				else{
					header('location:manage_products.php?q=statusnotchanged');
				} 
			}
			if($status == 'inactive'){
				$query = "UPDATE `product_master` SET `flag`= 1 WHERE `product_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_products.php?q=statuschanged');
				}
				else{
					header('location:manage_products.php?q=statusnotchanged');
				}
			}
		}
		//CODE FOR GIFT PRODUCTS TABLE
		if($table_name == 'gift_product'){

			if($status == 'active'){
				$query = "UPDATE `gift_product` SET `flag`= 0 WHERE `product_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_gifts.php?q=statuschanged');
				}
				else{
					header('location:manage_gifts.php?q=statusnotchanged');
				} 
			}
			if($status == 'inactive'){
				$query = "UPDATE `gift_product` SET `flag`= 1 WHERE `product_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_gifts.php?q=statuschanged');
				}
				else{
					header('location:manage_gifts.php?q=statusnotchanged');
				}
			}
		}
		//CODE FOR SLIDER TABLE
		if($table_name == 'slider'){

			if($status == 'active'){
				$query = "UPDATE `slider` SET `flag`= 0 WHERE `slider_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_slider.php?q=statuschanged');
				}
				else{
					header('location:manage_slider.php?q=statusnotchanged');
				} 
			}
			if($status == 'inactive'){
				$query = "UPDATE `slider` SET `flag`= 1 WHERE `slider_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_slider.php?q=statuschanged');
				}
				else{
					header('location:manage_slider.php?q=statusnotchanged');
				}
			}
		}
		//CODE FOR OFFER TABLE
		if($table_name == 'offer'){

			if($status == 'active'){
				$query = "UPDATE `offer` SET `active`= 0 WHERE `offer_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_offers.php?q=statuschanged');
				}
				else{
					header('location:manage_offers.php?q=statusnotchanged');
				} 
			}
			if($status == 'inactive'){
				$query = "UPDATE `offer` SET `active`= 1 WHERE `offer_id` = '$id'";
				$stmt=$conn->prepare($query);
				$stmt->execute();
				if($stmt){
					header('location:manage_offers.php?q=statuschanged');
				}
				else{
					header('location:manage_offers.php?q=statusnotchanged');
				}
			}
		}
		//active / inactive function for categories ,if one of the category is active / inactive the perticular 
		// product is also get changed.

		if($table_name == 'category_master'){
			if($status == 'active'){
				$query1 = "UPDATE `category_master` SET `active`= 0 WHERE `category_id` = '$id'";
				$query2 = "UPDATE `product_master` SET `flag`= 0 WHERE `category` = '$id'";
				$stmt1=$conn->prepare($query1);
				$stmt1->execute();
				$stmt2=$conn->prepare($query2);
				$stmt2->execute();
				if($stmt1 && $stmt2){
					header('location:manage_products.php?q=statuschanged');
				}
				else{
					header('location:manage_products.php?q=statusnotchanged');
				} 
			}
			if($status == 'inactive'){
				$query1 = "UPDATE `category_master` SET `active`= 1 WHERE `category_id` = '$id'";
				$query2 = "UPDATE `product_master` SET `flag`= 1 WHERE `category` = '$id'";
				$stmt1=$conn->prepare($query1);
				$stmt1->execute();
				$stmt2=$conn->prepare($query2);
				$stmt2->execute();
				if($stmt1 && $stmt2){
					header('location:manage_products.php?q=statuschanged');
				}
				else{
					header('location:manage_products.php?q=statusnotchanged');
				}
			}
		}
		
	//Stock In/Stock Out code

		$id = $_GET['q'];
		$table_name = $_GET['table_name'];
		$status = $_GET['status'];

		if($table_name == 'product_master'){

				if($status == 'stock'){
						$query = "UPDATE `product_master` SET `stock`= 0 WHERE `product_id` = '$id'";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						if($stmt){
							header('location:manage_products.php?q=statuschanged');
						}
						else{
							header('location:manage_products.php?q=statusnotchanged');
						} 
				}
				if($status == 'stockout'){
						$query = "UPDATE `product_master` SET `stock`= 1 WHERE `product_id` = '$id'";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						if($stmt){
							header('location:manage_products.php?q=statuschanged');
						}
						else{
							header('location:manage_products.php?q=statusnotchanged');
						}
					}
			}

		if($table_name == 'gift_product'){

				if($status == 'stock'){
						$query = "UPDATE `gift_product` SET `stock`= 0 WHERE `product_id` = '$id'";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						if($stmt){
							header('location:manage_gifts.php?q=statuschanged');
						}
						else{
							header('location:manage_gifts.php?q=statusnotchanged');
						} 
				}
				if($status == 'stockout'){
						$query = "UPDATE `gift_product` SET `stock`= 1 WHERE `product_id` = '$id'";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						if($stmt){
							header('location:manage_gifts.php?q=statuschanged');
						}
						else{
							header('location:manage_gifts.php?q=statusnotchanged');
						}
					}
			}			

//Code to change status of contact as mark_as_seen to seen

	if($table_name == 'contact'){

				if($status == 'mark_as_seen'){
						$query = "UPDATE `contact` SET `seen`= 1 WHERE `id` = '$id'";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						if($stmt){
							header('location:manage_contacts.php?q=statuschanged');
						}
						else{
							header('location:manage_contacts.php?q=statusnotchanged');
						} 
				}
				if($status == 'seen'){
						$query = "UPDATE `contact` SET `seen`= 0 WHERE `id` = '$id'";
						$stmt=$conn->prepare($query);
						$stmt->execute();
						if($stmt){
							header('location:manage_contacts.php?q=statuschanged');
						}
						else{
							header('location:manage_contacts.php?q=statusnotchanged');
						}
					}
			}			


 ?>