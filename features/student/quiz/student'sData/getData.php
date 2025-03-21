<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="./styles/your_quiz.scss">

</head>
<body>
    <section>
        <ul class="nav nav1 nav-underline">
            <li class="nav-item"><a href="student.php" class="logoAnchor" title="Home"><h2>Online Quiz System</h2></a></li>
            <li class="nav-item"><div class="logo"></div></li>
            <li class="nav-item"><a  class="nav-link quiz " href="student.php"  title="Home"> Home</a></li>
            <li class="nav-item"><a  class="nav-link  home" href="your_quiz.php"  title="Quiz">Your Quiz</a></li>
            <li class="nav-item"><a  class="nav-link logout" href="index.php"  title="Log Out"> Log Out</a></li>
        </ul>
        <div class="header">
            <h1>Multiple Choice!!</h1>
            <p>" Put the letter of the correct answer in the blank input provided.. "</p>
        </div>
        <div class="main">
            <form method="post" action="your_quiz.php">
               <?php
                require_once "db.php";
                $select="SELECT * from tb_quiz";
                if($result=$conn->query($select)){
                    while($row=$result->fetch_assoc()){
                        $id=$row['quiz_id'];
                        $qu=$row['question'];
                        $op1=$row['option1'];
                        $op2=$row['option2'];
                        $op3=$row['option3'];
                        $op4=$row['option4'];
                        $ans=$row['correct_Ans'];
               ?>
                        <h3><?php echo $id?>. <?php echo $qu?> </h3>
                         <ul>
                            <li><?php echo $op1?> .</li>
                            <li><?php echo $op2?> .</li>
                            <li><?php echo $op3?> .</li>
                            <li><?php echo $op4?> .</li>
                         </ul>
                         <h6>Answer :</h6>
                         <input type="text" class="form-control" value="<?php echo $ans?>" max-length="1">
              <?php
                    }
                }
               ?>
            </form>
        </div>
        <div id ="res" >
        <?php require_once "errors.php" ?>
            <?php 
            if(isset($_GET['score'])){
                $score=$_GET['score'];
            }
            ?>
          <div class="Result">
             <h3 class="text-success">Result :</h3>
            <div class="line"></div>
            <form action ="submit.php?score=<?php echo $score ?>" method="post">
                <div class="form-group">
                    <label> Your Fullname :</label>
                    <input type="text"  name="name"class="form-control">
                </div>
                <div class="form-group">
                    <label> Your section :</label>
                    <input type="text"  name="class" class="form-control">
                </div>
                <div class="form-group">
                    <label> Your Score is :</label>
                    <input type="number"  name="score" value="<?php echo $score?>" readonly class="form-control">
                </div>
                <div class="subb">
                    <input type="submit" class="btn btn-success" name="data" value="Submit"></input>
                </div>
            </form>
          </div>
        </div>
    </section>
</body>
<script src="./submit.js"></script>
</html>