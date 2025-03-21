<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87548e5234.js" crossorigin="anonymous"></script>
    <title>Online Quiz</title>
    <link rel="stylesheet" href="../../styles/teacher.scss">

</head>
<body>
    <section>
        <ul class="nav nav1 nav-underline">
        <li class="nav-item"><a href="teacher.php" class="logoAnchor" title="Home"><h2>Online Quiz System</h2></a></li>
            <li class="nav-item"><div class="logo"></div></li>
            <li class="nav-item"><a  class="nav-link home " href="teacher.php"  title="Home"> Home</a></li>
            <li class="nav-item"><a  class="nav-link  quiz" href="./quiz/view/quiz.php"  title="Quiz"> Quiz</a></li>
            <li class="nav-item"><a  class="nav-link logout" href="../../index.php"  title="Log Out"> Log Out</a></li>
        </ul>
        <div class="main">
            <h1>Welcome Teacher!</h1>
            <p>This is a teacher area where you can add quizzes and see the results.</p>
            <a  class="btn btn-outline-primary " href="./quiz/view/quiz.php"  title="Quiz"> Quiz</a>        
        </div>
    </section>
</body>
</html>