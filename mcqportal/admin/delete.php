<?php 
	include 'config.php';

	$record_id = $_GET['q'];
	$table_name = $_GET['table_name'];

	if($table_name == "product_master"){

		$query =  "UPDATE `product_master` SET `deleted`= 1 WHERE `product_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:manage_products.php?q=deleted');
		}
		else{
			header('location:manage_products.php?q=notdeleted');
		}
	}if($table_name == "category_master"){
	 	

		$query = "UPDATE `category_master` SET `deleted`= 1 WHERE `category_id` = '$record_id'";
		$query1 = "UPDATE `product_master` SET `deleted`= 1,`flagR`= 1 WHERE `category` = '$record_id'";
		$stmt=$conn->prepare($query);
		$stmt->execute();
		$stmt1=$conn->prepare($query1);
		$stmt1->execute();
		
		if($stmt && $stmt1){
			header('location:manage_products.php?q=deleted');
		}
		else{
			header('location:manage_products.php?q=notdeleted');
		}
	}
	if($table_name == "restore"){

		$query = "SELECT * FROM `product_master` WHERE `product_id` = '$record_id'";
		$stmt=$conn->prepare($query);
		$stmt->execute();
		$result=$stmt->fetch();
		$flagR=$result['flagR'];
                       

		if ($flagR == 0) {
			$query =  "UPDATE `product_master` SET `deleted`= 0 WHERE `product_id` = '$record_id'";
			$stmt=$conn->prepare($query);
	        $stmt->execute();
			if($stmt){
				header('location:recyclebin.php?q=restored');
			}
			else{
				header('location:recyclebin.php?q=notrestored');
			}
		}else{
			echo '<script>alert("TO Restore Product Restore Category First "); </script>' ;
			echo '<script>window.location="recyclebin.php"</script>' ;
			}
		
	}if($table_name == "restore_category"){

		$query =  "UPDATE `category_master` SET `deleted`= 0 WHERE `category_id` = '$record_id'";
		$query1 =  "UPDATE `product_master` SET `deleted`= 0,`flagR`=0 WHERE `category` = '$record_id'";
		$stmt=$conn->prepare($query);
		$stmt->execute();
		$stmt1=$conn->prepare($query1);
		$stmt1->execute();
		if($stmt && $stmt1){
			header('location:recyclebin_category.php?q=restored');
		}
		else{
			header('location:recyclebin_category.php?q=notrestored');
		}
	}
	
	if($table_name == "restore_gift"){

		$query =  "UPDATE `gift_product` SET `deleted`= 0 WHERE `product_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:recyclebin_gift.php?q=restored');
		}
		else{
			header('location:recyclebin_gift.php?q=notrestored');
		}
	}
	 
	 if($table_name == "gift_product"){

		$query =  "UPDATE `gift_product` SET `deleted`= 1 WHERE `product_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:manage_gifts.php?q=deleted');
		}
		else{
			header('location:manage_gifts.php?q=notdeleted');
		}
	}
	if($table_name == "slider"){
	 	
		$query = "DELETE FROM `slider` WHERE `slider_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:manage_slider.php?q=deleted');
		}
		else{
			header('location:manage_slider.php?q=notdeleted');
		}
	}
	if($table_name == "offer"){
	 	
		$query = "DELETE FROM `offer` WHERE `offer_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:manage_offers.php?q=deleted');
		}
		else{
			header('location:manage_offers.php?q=notdeleted');
		}
	}
	if($table_name == "contact"){
	 	
		$query = "DELETE FROM `contact` WHERE `id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:manage_contacts.php?q=deleted');
		}
		else{
			header('location:manage_contacts.php?q=notdeleted');
		}
	}
	if($table_name == "delete_product"){
	 	
		$query = "DELETE FROM `product_master` WHERE `product_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:recyclebin.php?q=deleted');
		}
		else{
			header('location:recyclebin.php?q=notdeleted');
		}
	}if($table_name == "delete_category"){
	 	
		$query1 = "DELETE FROM `category_master` WHERE `category_id` = '$record_id'";
		$stmt1=$conn->prepare($query1);
        $stmt1->execute();

        $query = "DELETE FROM `product_master` WHERE `category` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt && $stmt1){
			header('location:recyclebin_category.php?q=deleted');
		}
		else{
			header('location:recyclebin_category.php?q=notdeleted');
		}
	}
	if($table_name == "delete_gift"){
	 	
		$query = "DELETE FROM `gift_product` WHERE `product_id` = '$record_id'";
		$stmt=$conn->prepare($query);
        $stmt->execute();
		if($stmt){
			header('location:recyclebin_gift.php?q=deleted');
		}
		else{
			header('location:recyclebin_gift.php?q=notdeleted');
		}
	}
 ?>