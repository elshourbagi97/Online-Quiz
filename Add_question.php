<?php
session_start();
     $errors=array();
     $Answer=['a','A','b','B','c','C','d','D'];
     if(isset($_POST['Save'])){
        require "db.php";
    $question=mysqli_real_escape_string($conn,$_POST['question']);
    $op1=mysqli_real_escape_string($conn,$_POST['Option1']);
    $op2=mysqli_real_escape_string($conn,$_POST['Option2']);
    $op3=mysqli_real_escape_string($conn,$_POST['Option3']);
    $op4=mysqli_real_escape_string($conn,$_POST['Option4']);
    $correctAns=mysqli_real_escape_string($conn,$_POST['CorrectAns']);
    
    if(empty($question)){array_push($errors,'Please entering the Question ..');}
    if(empty($op1)){array_push($errors,'Please entering the Option1 ..');}
    if(empty($op2)){array_push($errors,'Please entering the Option2 ..');}
    if(empty($op3)){array_push($errors,'Please entering the Option3 ..');}
    if(empty($op4)){array_push($errors,'Please entering the Option4 ..');}
    if(empty($correctAns)){array_push($errors,'Error, Please entering the Correct Answer ..');}
    if(!in_array($correctAns, $Answer) ){
        array_push($errors,'Error, Please entering the Correct Answer from A to D ..');
    }

   if(count($errors) == 0){
    $insert="INSERT INTO tb_quiz (question,option1,option2,option3,option4,correct_Ans)
    VALUES ('$question','$op1','$op2','$op3','$op4','$correctAns')";
    if(mysqli_query($conn,$insert)){
        header('location: quiz.php');
        exit();
    }
    
}else{
    $_SESSION['errors'] = $errors;  
    header('location: quiz.php');
    exit();
}
}
   
 ?>