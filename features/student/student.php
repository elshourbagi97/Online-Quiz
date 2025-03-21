<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="./styles/student.scss">

</head>
<body>
    <section>
        <ul class="nav nav1 nav-underline">
        <li class="nav-item"><a href="student.php" class="logoAnchor" title="Home"><h2>Online Quiz System</h2></a></li>
            <li class="nav-item"><div class="logo"></div></li>
            <li class="nav-item"><a  class="nav-link home " href="student.php"  title="Home"> Home</a></li>
            <li class="nav-item"><a  class="nav-link  quiz" href="your_quiz.php"  title="Quiz">Your Quiz</a></li>
            <li class="nav-item"><a  class="nav-link logout" href="index.php"  title="Log Out"> Log Out</a></li>
        </ul>
        <div class="main">
            <h1>Welcome my best Student!</h1>
            <p>This is a student area where you can take quizzes, and the result will be sent to the teacher
            area after you have submitted !! <br> Wish You Best Luck ..</p>
            <div class="img"></div>
            <div class="quiz-buttons">
                <a  class="btn take btn-outline-primary " href="your_quiz.php"  title="Your Quiz"> Take Quiz</a>   
                <a  class="btn arrow btn-outline-primary " href="your_quiz.php"  title="Your Quiz"><div></div><p>→</p></a>        
            </div>
        </div>
    </section>
</body>
</html>