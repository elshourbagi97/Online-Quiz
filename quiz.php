<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="./styles/quiz.scss">

</head>
<body>
    <section id='section'>
        <ul class="nav nav1 nav-underline">
            <li class="nav-item"><a href="teacher.php" class="logoAnchor" title="Home"><h2>Online Quiz System</h2></a></li>
            <li class="nav-item"><div class="logo"></div></li>
            <li class="nav-item"><a  class="nav-link home " href="teacher.php" title="Home"> Home</a></li>
            <li class="nav-item"><a  class="nav-link  quiz" href="quiz.php" title="Quiz"> Quiz</a></li>
            <li class="nav-item"><a  class="nav-link logout" href="index.php" title="Log Out"> Log Out</a></li>
        </ul>
       <div class="mainBody">   
        <ul class="nav nav2 nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="quiz.php" title="Questions">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link res" href="result.php" title="Result">Result</a>
            </li>
         </ul>
        <div class="Add">
                <button type="button" class="btn btn1 btn-dark" id="btn-question" title="Add Questions">Add Questions</button>
                <button type="button" class="btn btn1 btn-dark" id="show-quiz" title="Add Questions"> view Quiz</button>
                <?php require_once "errors.php" ?>
                <div id="Questions">
                    <div class="question container">
                        <h2 class="text-success">Add Question :</h2>
                        <div class="line"></div>
                        <button class="btn btn-danger" id="btnX" title="Exit"><i class="fa-solid fa-x"></i></button>
                        <form action="add_question.php" method="post">
                           <div class="form-group">
                                <label class="text-secondary" >Question</label>
                                <input type="text"  class="form-control" name="question">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary">Option1</label>
                                <input type="text" class="form-control" name="Option1">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary">Option2</label>
                                <input type="text" class="form-control" name="Option2">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary">Option3</label>
                                <input type="text" class="form-control" name="Option3">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary" >Option4</label>
                                <input type="text" class="form-control" name="Option4">
                           </div>
                           <div class="form-group">
                                <label class="text-secondary" >Correct Answer (Letter Only)</label>
                                <input type="text" class="form-control"maxlength="1" style="text-transform: uppercase;" name="CorrectAns">
                           </div>
                           <input type="button" id="btnClose" class="btn btn-secondary"title="Close" value="Close"></input>
                           <input type="submit" class="btn btn-success" name="Save" title="Save Question" value="Save Question"></input>
                        </form>
                    </div>
               </div>
               <div id="Quiz">
                  <div class="quiz">
                        <h2 class="text-success">Show Your Quiz :</h2>
                        <div class="line"></div>
                        <button class="btn btn-danger" id="btnX2" title="Exit"><i class="fa-solid fa-x"></i></button>
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
                             $ans1=$row['correct_Ans'];
                             ?>
                             <h3><?php echo $id?>. <?php echo $qu?> </h3>
                              <ul>
                                 <li><?php echo $op1?> .</li>
                                 <li><?php echo $op2?> .</li>
                                 <li><?php echo $op3?> .</li>
                                 <li><?php echo $op4?> .</li>
                              </ul>
                              <h6>Answer :</h6>
                              <input type="letter" class="form-control"value="<?php echo $ans1 ?>" max-length="1" >
                      <?php
                             }
                         }
                     ?>
                 <button class="btn btn-success" style="margin:20px;" id="OK" title="Exit">OK</button>
                 </div>
                 <div style='height:0.2%;'></div>
               </div>
            </div>
        <table id="table" class="table ">
                <thead>
                    <tr >
                        <th>Quiz ID</th>
                        <th style="translate:50px 0px;">Question</th>
                        <th>Correct Answer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "db.php";
                    $select="SELECT * FROM tb_quiz";
                    if($result=$conn->query($select)){
                        while($row=$result->fetch_assoc()){
                            $id=$row['quiz_id'];
                            $question=$row['question'];
                            $ans=$row['correct_Ans'];
                            ?>
                            <tr>
                                <td style="translate:10px 0px;"><?php echo $id ?></td>
                                <td style="text-transform: capitalize;"><?php echo $question ?></td>
                                <td style="translate:40px 0px; text-transform: uppercase;"><?php echo $ans ?></td>
                                <td style="translate:-15px 0px;">
                                    <a href="edit.php?id=<?php echo $id?>" class="btn btn-outline-success" title="Edit"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="delete.php?id=<?php echo $id?>" class="btn btn-outline-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    } 
                    ?>
                </tbody>
            </table>
         </div>
    </section>
</body>

<script src="./quiz.js"></script>
</html>