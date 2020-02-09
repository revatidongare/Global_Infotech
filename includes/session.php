<?php
  session_start();

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password =$_POST['password'];
	
  $q = "SELECT * FROM `admin` WHERE `email` = ? AND `password` = ?";
  include 'config.php';
  $stmt=$conn->prepare($q);
  $stmt->execute([$email,$password]);
  $row = $stmt->fetch();
	
      $name = $row['name'];
  $conn=null;
  if ($row) {
     
    if ($id == 0 ) {
       $_SESSION['admin'] = $name;
        header('location: ../admin/index.php');
      # code...
    }else{
        header('location:../index.php?q='.md5(0));
   
    }

  }
  else{
   
   header('location:../index.php?p=102');
   //echo '<script>window.location= "../index.php" </script>'; 
  }
}
?>
