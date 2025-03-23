<?php
session_start();
$errors=array();
if(isset($_POST['data'])){
    $score=$_GET['score'];
    require_once "../../../../db/db.php";
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $class=mysqli_real_escape_string($conn,$_POST['class']);
    $total=mysqli_real_escape_string($conn,$_POST['score']);
    $dateTaken = date("Y-m-d H:i:s",strtotime("+1 hour")); 

    if(empty($name)){array_push($errors,"Please Entering Your Full Name in the Result From");}
    if(empty($class)){array_push($errors,"Please Entering Your Section or Your ClassRoom in the Result From");}

    $check_name="SELECT * FROM tb_result where name='$name'";
    $user_name=$conn->query($check_name);
    if($user=$user_name->fetch_assoc()){
        if($user['name']===$name){
            array_push($errors,"Sorry ,These name is taken ..");
        }
    }
   

    if(count($errors) == 0){
        $insert="INSERT INTO tb_result (name,year_Section,total_score,date_taken) Values ('$name','$class','$total','$dateTaken')";
        if(mysqli_query($conn,$insert)){
            header('location: ../../../finalPage/finalPage.php');
            exit();
        }
    }else{
        $_SESSION['errors'] = $errors;  
        header("location: ../student'sData/getData.php?score=$score");
        exit();
    }

}
 ?>