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

if (isset($_POST['student_data'])) {

    $subject_id=$_POST['subject_id'];
    $school=$_POST['school'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $query="INSERT INTO `student_data`(`name`, `phone`, `email`, `school`) VALUES (?,?,?,?)";
    include 'config.php';
    $stmt=$conn->prepare($query);
    $result=$stmt->execute([$name,$phone,$email,$school]);

    $query1="SELECT * FROM `student_data` WHERE `name`='$name' ";
    $stmt1=$conn->prepare($query1);
    $stmt1->execute();
    $row1=$stmt1->fetch();
    $user_id = $row1['student_id'];

    $query2="SELECT * FROM `student_data`";
    $stmt2=$conn->prepare($query2);
    $stmt2->execute();
    $row2=$stmt2->fetch();
    
    $conn=null;

    if ($result && $row1 && $row2) {
    
    
      header("location:../mcqportal/index.php?p=$subject_id&q=$user_id");
    }
    else{

      header("location:index.php");
    }    
    

    

}

 ?>