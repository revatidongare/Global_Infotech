<?php 
include 'session.php';

if (isset($_POST['demo_test'])) {

    $subject_id=$_POST['subject_id'];
    $school=$_POST['school'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $query="INSERT INTO `demo_student_data`(`name`, `phone`, `email`, `school`) VALUES (?,?,?,?)";
    include 'config.php';
    $stmt=$conn->prepare($query);
    $result=$stmt->execute([$name,$phone,$email,$school]);

    $query1="SELECT * FROM `demo_student_data` WHERE `email`='$email'";
    $stmt1=$conn->prepare($query1);
    $stmt1->execute();
    $row1=$stmt1->fetch();
    $user_id = $row1['student_id'];

    // $query2="SELECT * FROM `demo_student_data`";
    // $stmt2=$conn->prepare($query2);
    // $stmt2->execute();
    // $row2=$stmt2->fetch();
    
    $conn=null;

    if ($result && $row1) {    
        session_start();    
     $_SESSION['demo'] = $user_id;
      header("location:../mcqportal/index.php?p=$subject_id");
    }
    else{

      header("location:../index.php");
    }    
    
}
elseif (isset($_POST['final_student_data'])) {

    $subject_id=$_POST['subject_id'];
    $school=$_POST['school'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $test_key=$_POST['test_key'];
    
    include 'config.php';
    $query1="SELECT * FROM `key_table` WHERE `school` ='$school' ";
    $stmt1=$conn->prepare($query1);
    $stmt1->execute();
    $row1=$stmt1->fetch();
    $final_key=$row1['test_key'];
    
    

    if ( $test_key == $final_key) {  
    
        $query2="SELECT * FROM `final_student_data` WHERE `subject_id`='$subject_id' AND `email` = '$email'";
        $stmt2=$conn->prepare($query2);
        $stmt2->execute();
        $row2=$stmt2->fetch();

        if ($row2) {
             header("location:../test_final.php?f=101");
        }else{
             //echo '<script> alert("Not execute ")</script>';
            
            $query3="INSERT INTO `final_student_data`(`school`, `name`, `email`, `phone`,`subject_id`) VALUES (?,?,?,?,?)";
            $stmt3=$conn->prepare($query3);
            $result3=$stmt3->execute([$school,$name,$email,$phone,$subject_id]);
            
            $query4="SELECT * FROM `final_student_data` WHERE `email`='$email'";
            $stmt4=$conn->prepare($query4);
            $stmt4->execute();
            $row4=$stmt4->fetch();
            $user_id = $row4['test_id'];
            $conn=null;
            
            session_start();    
            $_SESSION['final'] = $user_id;
            header("location:../mcqportal/index.php?p=$subject_id");

        }
    }
    else{

      header("location:../test_final.php?q=1");
    }  
}
else{
      header("location:../index.php");
}

 ?>