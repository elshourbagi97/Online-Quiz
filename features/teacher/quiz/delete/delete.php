<?php
    require "../../../../db/db.php";
        $id=$_GET['id'];
    $delete="DELETE FROM tb_quiz WHERE quiz_id='$id'";
    if($conn->query($delete)){
        header('location: ../view/quiz.php');
    }else
    {
        echo "there ia an error in deleting";
    }

 ?>