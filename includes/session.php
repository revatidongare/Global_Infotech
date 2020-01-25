<?php
  session_start();

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);
	
  $q = "SELECT * FROM `user` WHERE `email` = ? AND `password` = ?";
  include 'config.php';
  $stmt=$conn->prepare($q);
  $stmt->execute([$email,$password]);
  $row = $stmt->fetch();
	 // $id = $row['user_id'];
      $name = $row['name'];
  $conn=null;
  if ($row) {
     //session_start();
    
     //$_SESSION['user_id'] = $id;
	  // if($_SESSION['user_id'] == 0){
		 //  header('location: ../kveller/manage_products.php');
	  // }else{
   //  header('location: ../index.php?q='.md5(0));
   
	  // }
    if ($id == 0 ) {
       $_SESSION['admin'] = $name;
        header('location: ../admin/index.php');
      # code...
    }else{
        header('location: ../index.php?q='.md5(0));
   
    }

  }
  else{
   
   header('location: ../login.php?p=102');
   //echo '<script>window.location= "../index.php" </script>'; 
  }
}
?>
