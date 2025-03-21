<?php
require "db.php";
$id=$_GET['id'];
$DEL="DELETE from tb_result WHERE result_id='$id'";
if(mysqli_query($conn,$DEL)){
    header('location: result.php');
}
 ?>