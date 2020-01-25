<?php 
include 'session.php';

if(isset($_POST['register'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
      
    $query="INSERT INTO `user`(`name`, `email`, `password`, `phone`) VALUES (?,?,?,?)";
    include 'config.php';
    $stmt=$conn->prepare($query);
    $result=$stmt->execute([$name,$email,$password,$phone]);
    $conn=null;
    if($result){
      header("location:../index.php?p=sucess");
    }
    else{

      header("location:../index.php");
    }
}

 ?>