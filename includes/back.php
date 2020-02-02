<?php 
include 'session.php';

if (isset($_POST['demo_test'])) {

    $subject_id=$_POST['subject_id'];
    $school=$_POST['school'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $query="INSERT INTO `student_data`(`name`, `phone`, `email`, `school`,`subject_id`) VALUES (?,?,?,?,?)";
    include 'config.php';
    $stmt=$conn->prepare($query);
    $result=$stmt->execute([$name,$phone,$email,$school,$subject_id]);

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
        session_start();    
     $_SESSION['demo'] = $user_id;
      header("location:../mcqportal/index.php?p=$subject_id");
    }
    else{

      header("location:../index.php");
    }    
    
}
elseif (isset($_POST['final_test'])) {

    $subject_id=$_POST['subject_id'];
    $school=$_POST['school'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $test_key=$_POST['test_key'];
    
    include 'config.php';
    $query2="SELECT * FROM `key_table` WHERE `school` ='$school' ";
    $stmt2=$conn->prepare($query2);
    $stmt2->execute();
    $row2=$stmt2->fetch();
    $final_key=$row2['test_key'];
    
    

    if ( $test_key == $final_key) {  

    $query="INSERT INTO `final_test`(`school`, `name`, `email`, `phone`) VALUES (?,?,?,?)";
    $stmt=$conn->prepare($query);
    $result=$stmt->execute([$school,$name,$email,$phone]);

    $query1="SELECT * FROM `final_test` WHERE `name`='$name' ";
    $stmt1=$conn->prepare($query1);
    $stmt1->execute();
    $row1=$stmt1->fetch();
    $user_id = $row1['test_id'];
    $conn=null;
        session_start();    
     $_SESSION['final'] = $user_id;
      header("location:../mcqportal/index.php?p=$subject_id");
    }
    else{

      header("location:../index.php");
    }  
}
else{
      header("location:../index.php");
}

 ?>