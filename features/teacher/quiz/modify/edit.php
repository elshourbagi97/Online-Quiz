<?php
    require "../../../../db/db.php";
    session_start(); 
    $errors=array();
    $Letters=['a','A','b','B','c','C','d','D'];
    if(isset($_POST['Save'])){
    $id=$_GET['id'];
    $question=mysqli_real_escape_string($conn,$_POST['question']);
    $op1=mysqli_real_escape_string($conn,$_POST['Option1']);
    $op2=mysqli_real_escape_string($conn,$_POST['Option2']);
    $op3=mysqli_real_escape_string($conn,$_POST['Option3']);
    $op4=mysqli_real_escape_string($conn,$_POST['Option4']);
    $correctAns=mysqli_real_escape_string($conn,$_POST['CorrectAns']);
if(!in_array($correctAns,$Letters)){array_push($errors,"Error, Please enter in the Answer from A to D  (CAN NOT EDIT IT, Please try again..) ");}
     if(count($errors) == 0){
    $update= "UPDATE tb_quiz set question='$question' , option1='$op1' , option2='$op2' ,
     option3='$op3' , option4='$op4' , correct_Ans='$correctAns' where quiz_id='$id' ";
        if(mysqli_query($conn,$update)){
            header('location: ../view/quiz.php');
            exit();
         }
     }else{
        $_SESSION['errors']=$errors;
        header('location: ../view/quiz.php');
        exit();
     }
    
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="../../../../styles/edit.scss">

</head>
<body>
    <section>
        <ul class="nav nav1 nav-underline">
        <li class="nav-item"><a href="../../teacher.php" class="logoAnchor" title="Home"><h2>Online Quiz System</h2></a></li>
        <li class="nav-item"><div class="logo"></div></li>
            <li class="nav-item"><a  class="nav-link home " href="../../teacher.php" > Home</a></li>
            <li class="nav-item"><a  class="nav-link  quiz" href="quiz.php"> Quiz</a></li>
            <li class="nav-item"><a  class="nav-link logout" href="../../../../index.php"> Log Out</a></li>
        </ul>
       <div class="mainBody">   
            <div class="Add">
                <?php require_once "../../../../errors/errors.php" ?>
                <div id="Questions">
                    <div class="question container">
                        <h2 class="text-success"> Edit Question :</h2>
                        <div class="line"></div>
                        <a class="btn btnX btn-danger" href="../view/quiz.php" title="Exit"><i class="fa-solid fa-x"></i></a>
                        <?php
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $select = "SELECT * FROM tb_quiz where quiz_id='$id'";
                            if($result= $conn->query($select)){
                                if($row=$result->fetch_assoc()){
                                    $id=$row['quiz_id'];
                                    $question1=$row['question'];
                                    $opt1=$row['option1'];
                                    $opt2=$row['option2'];
                                    $opt3=$row['option3'];
                                    $opt4=$row['option4'];
                                    $ans=$row['correct_Ans'];
                                }
                            }
                           
                        }
                         ?>
                        <form action="edit.php?id=<?php echo $id ?>" method="post">
                           <div class="form-group">
                                <label class="text-secondary" >Question</label>
                                <input type="text" value="<?php echo $question1?>" class="form-control" name="question">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary">Option1</label>
                                <input type="text" value="<?php echo $opt1 ?>" class="form-control" name="Option1">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary">Option2</label>
                                <input type="text" value="<?php echo $opt2 ?>"class="form-control" name="Option2">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary">Option3</label>
                                <input type="text" value="<?php echo $opt3 ?>" class="form-control" name="Option3">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary" >Option4</label>
                                <input type="text" value="<?php echo $opt4 ?>" class="form-control" name="Option4">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary" >Correct Answer (Letter Only)</label>
                                <input type="text" value="<?php echo $ans ?>" class="form-control"maxlength="1" style="text-transform: uppercase;" name="CorrectAns">
                           </div>
                           <a href="../view/quiz.php" class="btn btnClose btn-secondary" title="Close">Close</a>
                           <input type="submit" class="btn btn-success" title="Save Questions" name="Save" value="Save Question"></input>
                        </form>
                    </div>
               </div>
            </div>
         </div>
    </section>
</body>


</html>