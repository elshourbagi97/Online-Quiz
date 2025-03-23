<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="../../../styles/quiz.scss">

</head>
<body>
    <section>
        <ul class="nav nav1 nav-underline">
        <li class="nav-item"><a href="../teacher.php" class="logoAnchor" title="Home"><h2>Online Quiz System</h2></a></li>
        <li class="nav-item"><div class="logo"></div></li>
            <li class="nav-item"><a  class="nav-link home " href="../teacher.php" title="Home" > Home</a></li>
            <li class="nav-item"><a  class="nav-link  quiz" href="../quiz/view/quiz.php" title="Quiz"> Quiz</a></li>
            <li class="nav-item"><a  class="nav-link logout" href="../../../index.php" title="Log Out"> Log Out</a></li>
        </ul>
       <div class="mainBody">   
       <ul class="nav nav2 nav-tabs">
            <li class="nav-item">
                <a class="nav-link res" style="margin-right:5px;" href="../quiz/view/quiz.php" title="Questions">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active " aria-current="page" title="Result"  href="result.php">Result</a>
            </li>
        </ul>
            <table class="table ">
                <thead>
                    <tr >
                        <th>Result ID</th>
                        <th>Student Name</th>
                        <th>Year and Section</th>
                        <th>Quiz Score</th>
                        <th style="translate:15px 0px">Date Taken</th>
                        <th style="translate:-10px 0px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require "../../../db/db.php";
                        $select="SELECT * FROM tb_result";
                        if($result=$conn->query($select)){
                            while($row=$result->fetch_assoc()){
                                $resID=$row['result_id'];
                                $name=$row['name'];
                                $year=$row['year_Section'];
                                $score=$row['total_score'];
                                $date=$row['date_taken'];
                                ?>
                                <tr>
                                    <td style="translate:15px 0px"><?php echo $resID ?></td>
                                    <td><?php echo $name ?></td>
                                    <td style="translate:40px 0px"><?php echo $year ?></td>
                                    <td style="translate:30px 0px"><?php echo $score ?></td>
                                    <td style="translate:-5px 0px"><?php echo $date ?></td>
                                    <td><a href="../quiz/delete/delResult.php?id=<?php echo $resID?>"class="btn btn-outline-danger" title="Delete"><i class="fa-solid fa-trash"></i></a></td>
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

</html>